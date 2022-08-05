<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Person;
use App\Models\Patient;
use App\Models\PatientFacility;
use App\Models\PatientObservation;
use App\Models\Facility;
use Exception;

class PatientController extends Controller
{
    private function patientList()
    {
        return DB::table('tbl_person')
        ->join('tbl_patient', 'tbl_person.person_id', '=', 'tbl_patient.person_id')
        ->leftJoin('tbl_patient_facilities', 'tbl_patient.patient_id', '=', 'tbl_patient_facilities.patient_id')
        ->leftJoin('tbl_master_facility', 'tbl_patient_facilities.mfl_code', '=', 'tbl_master_facility.code')
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

    public function import(Request $request)
    {
        return view('patients.import');
    }

    public function store(Request $request)
    {

            // validate request
        $validated = $request->validate([
            'firstname' => ['required', 'string', 'max:150'],
            'middlename' => ['max:150'],
            'lastname' => ['required', 'string', 'max:150'],
            'ccc_no' => ['required', 'string', 'unique:tbl_patient'],
            'upi' => ['max:45'],
            'facility' => ['required', 'numeric'],
            'date_of_birth' => ['required', ],
            'art_start_date' => ['required' ],
            'from_date' => ['required' ],
            'viral_load' => ['required', 'string', 'max:100'],
            'regimen' => ['required', 'string', 'max:100'],
            'tca' => ['required'],
            'phone' => ['required','numeric'],
        ]);

        //DB::transaction(function ($request) {

            //create a new person record
            $person =  Person::create([
                'firstname' => $request->get('firstname'),
                'middlename' => $request->get('middlename'),
                'lastname' => $request->get('lastname'),
            ]);

            //create patient record
            $patient =  Patient::create([
                'person_id' => $person['person_id'],
                'ccc_no' => $request->get('ccc_no'),
                'upi' => $request->get('upi') == '' ? null : $request->get('upi'),
                'date_of_birth' => date('Y-m-d', strtotime($request->get('date_of_birth'))),
                'art_start_date' => date('Y-m-d', strtotime($request->get('art_start_date'))),
                'msidn' => $request->get('phone'),
            ]);

            //create patient observation
            PatientObservation::create([
                'patient_id' => $patient['patient_id'],
                'mfl_code' => $request->get('facility'),
                'viral_load' => $request->get('viral_load'),
                'regimen' => $request->get('regimen'),
                'tca' => date('Y-m-d', strtotime($request->get('tca'))),
            ]);

            //create patient facility
            PatientFacility::create([
                'patient_id' => $patient['patient_id'],
                'mfl_code' => $request->get('facility'),
                'from_date' => date('Y-m-d', strtotime($request->get('from_date'))),
            ]);

            return redirect()->route('patients.list');

        //});
    }
}
