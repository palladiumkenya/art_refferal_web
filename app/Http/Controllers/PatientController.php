<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helper\Helper;
use App\Models\Person;
use App\Models\Patient;
use App\Models\PatientDetail;
use App\Models\PatientFacility;
use App\Models\PatientObservation;
use App\Models\Facility;
use App\Models\ReferralType;
use App\Models\Regimen;
use App\Imports\PatientsImport;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use Auth;

class PatientController extends Controller
{
    private function patientList()
    {
        if (Auth::user()->role_id == '1') {
            return DB::table('tbl_person')
                ->join('tbl_patient', 'tbl_person.person_id', '=', 'tbl_patient.person_id')
                ->leftJoin('tbl_patient_observations', 'tbl_patient.patient_id', '=', 'tbl_patient_observations.patient_id')
                ->leftJoin('tbl_patient_facilities', 'tbl_patient.patient_id', '=', 'tbl_patient_facilities.patient_id')
                ->leftJoin('tbl_master_facility', 'tbl_patient_facilities.mfl_code', '=', 'tbl_master_facility.code')
                ->select('tbl_person.person_id', 'tbl_patient.patient_id', 'tbl_patient.ccc_no', 'tbl_person.firstname', 'tbl_person.middlename', 'tbl_person.lastname', 'tbl_patient.upi', 'tbl_patient.msidn', 'tbl_patient.date_of_birth', 'tbl_patient.art_start_date', 'tbl_patient_observations.viral_load', 'tbl_patient_observations.regimen', 'tbl_patient_observations.tca', 'tbl_patient_facilities.mfl_code', 'tbl_master_facility.name as facility', 'tbl_patient_facilities.from_date')
                ->get();
        }
        if (Auth::user()->role_id == '2') {
            return DB::table('tbl_person')
                ->join('tbl_patient', 'tbl_person.person_id', '=', 'tbl_patient.person_id')
                ->leftJoin('tbl_patient_observations', 'tbl_patient.patient_id', '=', 'tbl_patient_observations.patient_id')
                ->leftJoin('tbl_patient_facilities', 'tbl_patient.patient_id', '=', 'tbl_patient_facilities.patient_id')
                ->leftJoin('tbl_master_facility', 'tbl_patient_facilities.mfl_code', '=', 'tbl_master_facility.code')
                ->join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
                ->select('tbl_person.person_id', 'tbl_patient.patient_id', 'tbl_patient.ccc_no', 'tbl_person.firstname', 'tbl_person.middlename', 'tbl_person.lastname', 'tbl_patient.upi', 'tbl_patient.msidn', 'tbl_patient.date_of_birth', 'tbl_patient.art_start_date', 'tbl_patient_observations.viral_load', 'tbl_patient_observations.regimen', 'tbl_patient_observations.tca', 'tbl_patient_facilities.mfl_code', 'tbl_master_facility.name as facility', 'tbl_patient_facilities.from_date')
                ->where('tbl_location.partner_id', Auth::user()->partner_id)
                ->get();
        }
        if (Auth::user()->role_id == '3') {
            return DB::table('tbl_person')
                ->join('tbl_patient', 'tbl_person.person_id', '=', 'tbl_patient.person_id')
                ->leftJoin('tbl_patient_observations', 'tbl_patient.patient_id', '=', 'tbl_patient_observations.patient_id')
                ->leftJoin('tbl_patient_facilities', 'tbl_patient.patient_id', '=', 'tbl_patient_facilities.patient_id')
                ->leftJoin('tbl_master_facility', 'tbl_patient_facilities.mfl_code', '=', 'tbl_master_facility.code')
                ->join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
                ->select('tbl_person.person_id', 'tbl_patient.patient_id', 'tbl_patient.ccc_no', 'tbl_person.firstname', 'tbl_person.middlename', 'tbl_person.lastname', 'tbl_patient.upi', 'tbl_patient.msidn', 'tbl_patient.date_of_birth', 'tbl_patient.art_start_date', 'tbl_patient_observations.viral_load', 'tbl_patient_observations.regimen', 'tbl_patient_observations.tca', 'tbl_patient_facilities.mfl_code', 'tbl_master_facility.name as facility', 'tbl_patient_facilities.from_date')
                ->where('tbl_location.mfl_code', Auth::user()->mfl_code)
                ->get();
        }
        if (Auth::user()->role_id == '4') {
            return DB::table('tbl_person')
                ->join('tbl_patient', 'tbl_person.person_id', '=', 'tbl_patient.person_id')
                ->leftJoin('tbl_patient_observations', 'tbl_patient.patient_id', '=', 'tbl_patient_observations.patient_id')
                ->leftJoin('tbl_patient_facilities', 'tbl_patient.patient_id', '=', 'tbl_patient_facilities.patient_id')
                ->leftJoin('tbl_master_facility', 'tbl_patient_facilities.mfl_code', '=', 'tbl_master_facility.code')
                ->join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
                ->join('tbl_partner', 'tbl_partner.partner_id', '=', 'tbl_location.partner_id')
                ->join('tbl_agency', 'tbl_agency.partner_id', '=', 'tbl_partner.partner_id')
                ->select('tbl_person.person_id', 'tbl_patient.patient_id', 'tbl_patient.ccc_no', 'tbl_person.firstname', 'tbl_person.middlename', 'tbl_person.lastname', 'tbl_patient.upi', 'tbl_patient.msidn', 'tbl_patient.date_of_birth', 'tbl_patient.art_start_date', 'tbl_patient_observations.viral_load', 'tbl_patient_observations.regimen', 'tbl_patient_observations.tca', 'tbl_patient_facilities.mfl_code', 'tbl_master_facility.name as facility', 'tbl_patient_facilities.from_date')
                ->where('tbl_partner.agency_id', Auth::user()->agency_id)
                ->get();
        }
    }

    private function facilitiesList()
    {
        return Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
            ->select('tbl_master_facility.code', 'tbl_master_facility.name')
            ->orderBy('tbl_master_facility.name', 'ASC')
            ->get();
    }

    public function index()
    {
        $patients = $this->patientList();
        $facilities = $this->facilitiesList();
        return view('patients.patients', compact('patients', 'facilities'));
    }

    public function create(Request $request)
    {
        $facilities = $this->facilitiesList();

        return view('patients.addpatient', compact('facilities'));
    }

    public function import(Request $request)
    {
        return view('patients.import');
    }

    public function upload(Request $request)
    {
        Excel::import(new PatientsImport, $request->file);

        return redirect()->route('patients.list')->with('success', 'Patients List Imported Successfully');
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
            'facility' => ['required', 'string'],
            'date_of_birth' => ['required'],
            'art_start_date' => ['required'],
            'from_date' => ['required'],
            'viral_load' => ['required', 'string', 'max:100'],
            'regimen' => ['required', 'string', 'max:100'],
            'tca' => ['required'],
            'phone' => ['required', 'string'],
        ]);

        //DB::transaction(function ($request) {

        $data = array(
            'firstname' => $request->get('firstname'),
            'middlename' => $request->get('middlename'),
            'lastname' => $request->get('lastname'),
            'ccc_no' => $request->get('ccc_no'),
            'upi' => $request->get('upi') == '' ? null : $request->get('upi'),
            'date_of_birth' => date('Y-m-d', strtotime($request->get('date_of_birth'))),
            'art_start_date' => date('Y-m-d', strtotime($request->get('art_start_date'))),
            'phone_no' => $request->get('phone'),
            'mfl_code' => $request->get('facility'),
            'viral_load' => $request->get('viral_load'),
            'regimen' => $request->get('regimen'),
            'tca' => date('Y-m-d', strtotime($request->get('tca'))),
            'date_enrolled_in_facility' => date('Y-m-d', strtotime($request->get('from_date'))),
        );

        //create a new person record
        $person = Helper::PatientStore($data);

        return redirect()->route('patients.list');

        //});
    }

    public function update(Request $request)
    {

        $person = Person::where('person_id', $request->person_id)
            ->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'middlename' => $request->middlename,
            ]);

        $patient = Patient::where('person_id', $request->person_id)
            ->update([
                'ccc_no' => $request->ccc_no,
                'upi' => $request->upi == '' ? null : $request->upi,
                'date_of_birth' => date('Y-m-d', strtotime($request->date_of_birth)),
                'art_start_date' => date('Y-m-d', strtotime($request->art_start_date)),
                'msidn' => $request->phone,
            ]);

        if ($person) {
            Alert::success('Success', 'You\'ve Successfully Updated the Patient Record');
            return back();
        } elseif ($patient) {
            Alert::success('Success', 'You\'ve Successfully Updated the Patient Record');
            return back();
        } else {
            Alert::error('Failed', 'Update Failed');
            return back();
        }
    }

    public function destroy(Request $request)
    {
        $person = Person::destroy($request->person_id);
        if ($person) {
            Alert::success('Success', 'You\'ve Successfully Deleted the Patient Record');
            //return back();
        } else {
            Alert::error('Failed', 'Delete Failed');
            //return back();
        }
    }

    public function search()
    {
        return view('patients.search');
    }

    public function filter(Request $request)
    {
        $filter = $request->filter;
        if ($filter != '') {
            $patient = PatientDetail::where('full_name', 'LIKE', '%' . $filter . '%')->orWhere('ccc_no', 'LIKE', '%' . $filter . '%')->get();
            if (count($patient) > 0) {
                return view('patients.search')->withDetails($patient)->withQuery($filter);
            } else {
                return view('patients.search')->withMessage('No Details found. Try to search again !');
            }
        } else {
            return view('patients.search')->withMessage('Type in some patient details to search!');
        }
    }

    public function show(Request $request)
    {
        $id = base64_decode(base64_decode($request->route('id')));
        $patientDetails = PatientDetail::where('person_id', $id)->get();
        $referral_types = ReferralType::orderBy('referral_type', 'ASC')->get();
        $regimens = Regimen::orderBy('regimen_desc', 'ASC')->get();
        $mfl_facilities = $this->facilitiesList();
        foreach ($patientDetails as $row) {
            $facilities = DB::table('tbl_patient_facilities as a')
                ->join('tbl_master_facility as b', 'a.mfl_code', '=', 'b.code')
                ->where('a.patient_id',  $row->patient_id)
                ->select('a.mfl_code', 'b.name as facility_name')
                ->distinct()
                ->get();
            $observations =  DB::table('tbl_patient_observations')
                ->join('tbl_master_facility', 'tbl_patient_observations.mfl_code', '=', 'tbl_master_facility.code')
                ->where('tbl_patient_observations.patient_id', '=', $row->patient_id)
                ->select('tbl_patient_observations.*', 'tbl_master_facility.name as facility')
                ->get();
            $refferals =  DB::table('tbl_refferal as a')
                ->join('tbl_patient as b', 'a.ccc_no', '=', 'b.ccc_no')
                ->leftJoin('tbl_master_facility as c', 'a.initiator_mfl_code', '=', 'c.code')
                ->leftJoin('tbl_master_facility as d', 'a.reffered_mfl_code', '=', 'd.code')
                ->where('b.patient_id', '=', $row->patient_id)
                ->select('a.*', 'c.name as from_facility', 'd.name as to_facility')
                ->get();
        }

        return view('patients.show-details', compact('patientDetails', 'facilities', 'observations', 'refferals', 'referral_types', 'mfl_facilities', 'regimens'));
    }

    public function observation_store(Request $request)
    {

        // validate request
        $validated = $request->validate([
            'patient_id' => ['required'],
            'viral_load_new' => ['required', 'string', 'max:45'],
            'regimen_new' => ['required', 'string', 'max:100'],
            'tca_new' => ['required'],
            'observation_mflcode_new' => ['required'],
        ]);

        //create patient observation
        $observation = PatientObservation::create([
            'patient_id' => $request->get('patient_id'),
            'mfl_code' => $request->get('observation_mflcode_new'),
            'viral_load' => $request->get('viral_load_new'),
            'regimen' => $request->get('regimen_new'),
            'tca' => date('Y-m-d', strtotime($request->get('tca_new'))),
        ]);

        if ($observation) {
            Alert::success('Success', 'You\'ve successfully added a new observation record');
            return back();
        } else {
            Alert::error('Failed', 'Add failed');
            return back();
        }
    }

    public function observation_update(Request $request)
    {

        $observation = PatientObservation::where('id', $request->observation_id)
            ->update([
                'mfl_code' => $request->observation_mflcode,
                'viral_load' => $request->viral_load,
                'regimen' => $request->regimen,
                'tca' => date('Y-m-d', strtotime($request->tca)),
            ]);

        if ($observation) {
            Alert::success('Success', 'You\'ve successfully updated the observation record');
            return back();
        } else {
            Alert::error('Failed', 'Update failed');
            return back();
        }
    }

    public function referral_store(Request $request)
    {

        // validate request
        $validated = $request->validate([
            'ccc_no' => ['required'],
            'referral_type' => ['required'],
            'reffered_mfl_code' => ['required'],
            'tca_referral' => ['required'],
            'regimen_referral' => ['required'],
            'drug_days_new' => ['required', 'numeric'],
        ]);

        //create patient observation
        $referral = Referral::create([
            'ccc_no' => $request->get('ccc_no'),
            'referral_type' => $request->get('referral_type'),
            'initiation_date' => date('Y-m-d'),
            'viral_load' => $request->get('viral_load_new'),
            'regimen' => $request->get('regimen_new'),
            'tca' => date('Y-m-d', strtotime($request->get('tca_new'))),
        ]);

        if ($observation) {
            Alert::success('Success', 'You\'ve successfully added a new observation record');
            return back();
        } else {
            Alert::error('Failed', 'Add failed');
            return back();
        }
    }
}
