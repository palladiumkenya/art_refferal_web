<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Person;
use App\Models\Patient;
use App\Models\Facility;
use Exception;

class PatientController extends Controller
{
    private function patientList()
    {
        return DB::table('tbl_person')
        ->join('tbl_patient', 'tbl_person.person_id', '=', 'tbl_patient.person_id')
        ->join('tbl_master_facility', 'tbl_patient.mfl_code', '=', 'tbl_master_facility.code')
        ->select('tbl_person.person_id','tbl_patient.ccc_no','tbl_person.firstname', 'tbl_person.middlename', 'tbl_person.lastname', 'tbl_patient.upi', 'tbl_patient.msidn', 'tbl_master_facility.name as facility')
        ->get();
    }
    public function index()
    {
        return view('patients.patients', ['patients' =>  $this->patientList()]);
    }

    public function create(Request $request)
    {
        $facilities = Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
            ->select('tbl_master_facility.code', 'tbl_master_facility.name')
            ->orderBy('tbl_master_facility.name', 'ASC')
            ->get();

        return view('patients.addpatient', compact('facilities'));
    }

    public function store(Request $request)
    {
        // validate request
        $validated = $request->validate([
            'firstname' => ['required', 'string', 'max:150'],
            'middlename' => ['max:150'],
            'lastname' => ['required', 'string', 'max:150'],
            'ccc_no' => ['required', 'numeric', 'unique:tbl_patient'],
            'upi' => ['string', 'max:45'],
            'facility' => ['required', 'numeric'],
            'date_of_birth' => ['required', ],
            'art_start_date' => ['required' ],
            'viral_load' => ['required', 'string', 'max:100'],
            'regimen' => ['required', 'string', 'max:100'],
            'tca' => ['required'],
            'phone' => ['required','numeric'],
        ]);

        //create a new person record
        $person =  Person::create([
            'firstname' => $request->get('firstname'),
            'middlename' => $request->get('middlename'),
            'lastname' => $request->get('lastname'),
        ]);
        $person_id = $person['person_id'];

        //create patient record
        $patient =  Patient::create([
            'person_id' => $person_id,
            'ccc_no' => $request->get('ccc_no'),
            'upi' => $request->get('upi') == '' ? null : $request->get('upi'),
            'mfl_code' => $request->get('facility'),
            'date_of_birth' => date('Y-m-d', strtotime($request->get('date_of_birth'))),
            'art_start_date' => date('Y-m-d', strtotime($request->get('art_start_date'))),
            'viral_load' => $request->get('viral_load'),
            'regimen' => $request->get('regimen'),
            'tca' => date('Y-m-d', strtotime($request->get('tca'))),
            'msidn' => $request->get('phone'),
        ]);

        return view('patients.patients', ['patients' =>  $this->patientList()]);
    }
}
