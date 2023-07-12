<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Helper;
use App\Models\Referral;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Log;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Patient::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function register(Request $request)
    {
        set_time_limit(120);

        $person = array();
        $data = array();
        $patientData = $request->all();
        //Log::debug($patientData);
        //Process Registration Message
        if(($patientData["MESSAGE_HEADER"]["MESSAGE_TYPE"]=='ADT^A04') || ($patientData["MESSAGE_HEADER"]["MESSAGE_TYPE"]=='ADT^A08'))
        {
            $data['upi'] = null;
            $data['mfl_code'] = $patientData["MESSAGE_HEADER"]["SENDING_FACILITY"];
            $data['firstname'] = $patientData["PATIENT_IDENTIFICATION"]["PATIENT_NAME"]["FIRST_NAME"];
            $data['middlename'] = $patientData["PATIENT_IDENTIFICATION"]["PATIENT_NAME"]["MIDDLE_NAME"];
            $data['lastname'] = $patientData["PATIENT_IDENTIFICATION"]["PATIENT_NAME"]["LAST_NAME"];
            $data['date_of_birth'] = date("Y-m-d",strtotime($patientData["PATIENT_IDENTIFICATION"]["DATE_OF_BIRTH"]));
            $data['phone_no'] = $patientData["PATIENT_IDENTIFICATION"]["PHONE_NUMBER"];
            $data['gender'] = $patientData["PATIENT_IDENTIFICATION"]["SEX"] == 'M' ? 'Male' : 'Female';
            $data['art_start_date'] = empty($patientData["PATIENT_VISIT"]) ? null : $patientData["PATIENT_VISIT"]["HIV_CARE_ENROLLMENT_DATE"];
            $data['date_enrolled_in_facility'] = empty($patientData["PATIENT_VISIT"]) ? null : $patientData["PATIENT_VISIT"]["HIV_CARE_ENROLLMENT_DATE"];
            $data['tca'] = null;
            $data['visit_date'] = null;
            $data['viral_load'] = null;
            $data['regimen'] = null;

            if(!empty($patientData["APPOINTMENT_INFORMATION"])){
                foreach($patientData["APPOINTMENT_INFORMATION"] as $appointment)
                {
                    $data['tca'] = $appointment['APPOINTMENT_DATE'];
                    $data['visit_date'] = $appointment['VISIT_DATE'];
                }
            }

            if(!empty($patientData["PATIENT_IDENTIFICATION"])){
                foreach($patientData["PATIENT_IDENTIFICATION"]["INTERNAL_PATIENT_ID"] as $id)
                {
                    $data[$id['IDENTIFIER_TYPE']] = $id['ID'];
                }
            }

            if(!empty($patientData["OBSERVATION_RESULT"])){
                foreach($patientData["OBSERVATION_RESULT"] as $obs)
                {
                    switch($obs['OBSERVATION_IDENTIFIER'])
                    {
                            case "ART_START":
                                $data['art_start_date'] = $obs['OBSERVATION_VALUE'];
                            break;
                            case "CURRENT_REGIMEN":
                                $data['regimen'] = $obs['OBSERVATION_VALUE'];
                            break;
                    }
                }
            }

            //dd($data);
            //exit;
            $person[] = Helper::PatientStore($data);

            if(count($person)>0){
                return response()->json(['status' =>"success",'message'=>$patientData]);
            }else{
                return response()->json(['status' =>"fail",'message'=>'Failure while inserting patient record']);
            }

        }
        else if($patientData["MESSAGE_HEADER"]["MESSAGE_TYPE"]=='SIU^S12') //Process Appointment Message
        {
            $data['upi'] = null;
            $data['mfl_code'] = $patientData["MESSAGE_HEADER"]["SENDING_FACILITY"];
            $data['firstname'] = $patientData["PATIENT_IDENTIFICATION"]["PATIENT_NAME"]["FIRST_NAME"];
            $data['middlename'] = $patientData["PATIENT_IDENTIFICATION"]["PATIENT_NAME"]["MIDDLE_NAME"];
            $data['lastname'] = $patientData["PATIENT_IDENTIFICATION"]["PATIENT_NAME"]["LAST_NAME"];
            $data['date_of_birth'] = date("Y-m-d",strtotime($patientData["PATIENT_IDENTIFICATION"]["DATE_OF_BIRTH"]));
            $data['phone_no'] = $patientData["PATIENT_IDENTIFICATION"]["PHONE_NUMBER"];
            $data['gender'] = $patientData["PATIENT_IDENTIFICATION"]["SEX"] == 'M' ? 'Male' : 'Female';
            $data['art_start_date'] = NULL;
            $data['date_enrolled_in_facility'] = NULL;
            $data['tca']=NULL;
            $data['visit_date'] = null;
            $data['viral_load'] = null;
            $data['regimen'] = null;
            $data['art_start_date']= null;

            foreach($patientData["PATIENT_IDENTIFICATION"]["INTERNAL_PATIENT_ID"] as $id)
            {
                $data[$id['IDENTIFIER_TYPE']] = $id['ID'];
            }


            foreach($patientData["APPOINTMENT_INFORMATION"] as $appointment)
            {
                $data['tca'] = $appointment['APPOINTMENT_DATE'];
                $data['visit_date'] = $appointment['VISIT_DATE'];
            }



            $person[] = Helper::PatientStore($data);

            if(count($person)>0){
                return response()->json(['status' =>"success",'message'=>$patientData]);
            }else{
                return response()->json(['status' =>"fail",'message'=>'Failure while inserting patient record']);
            }



        }
        else if($patientData["MESSAGE_HEADER"]["MESSAGE_TYPE"]=='SIU^S20') //Process transfer in/out Message
        {
            $data['upi'] = null;
            $data['mfl_code'] = $patientData["MESSAGE_HEADER"]["SENDING_FACILITY"];
            $data['firstname'] = $patientData["PATIENT_IDENTIFICATION"]["PATIENT_NAME"]["FIRST_NAME"];
            $data['middlename'] = $patientData["PATIENT_IDENTIFICATION"]["PATIENT_NAME"]["MIDDLE_NAME"];
            $data['lastname'] = $patientData["PATIENT_IDENTIFICATION"]["PATIENT_NAME"]["LAST_NAME"];
            $data['date_of_birth'] = date("Y-m-d",strtotime($patientData["PATIENT_IDENTIFICATION"]["DATE_OF_BIRTH"]));
            $data['phone_no'] = $patientData["PATIENT_IDENTIFICATION"]["PHONE_NUMBER"];
            $data['gender'] = ($patientData["PATIENT_IDENTIFICATION"]["SEX"] == 'M' ? 'Male' : ($patientData["PATIENT_IDENTIFICATION"]["SEX"] == 'F' ? 'Female' : null));
            $data['art_start_date'] = NULL;
            $data['date_enrolled_in_facility'] = NULL;
            $data['tca']=NULL;
            $data['visit_date'] = null;
            $data['viral_load'] = null;
            $data['regimen'] = null;
            $data['art_start_date']= null;
            $data['initiation_date']= null;
            $data['acceptance_date']= null;
            $data['last_vl_date']= null;
            $data['drug_days']= null;
            $data['transfer_status']= $patientData["SERVICEREQUEST"]["STATUS"];
            $data['transfer_intent']= $patientData["SERVICEREQUEST"]["INTENT"];
            $data['transfer_priority']= $patientData["SERVICEREQUEST"]["PRIORITY"];
            $data['transfer_out_facility']= $patientData["SERVICEREQUEST"]["TOFACILITYMFLCODE"];
            $data['transfer_in_facility']= $patientData["SERVICEREQUEST"]["TIFACILITYMFLCODE"];

            foreach($patientData["PATIENT_IDENTIFICATION"]["INTERNAL_PATIENT_ID"] as $id)
            {
                $data[$id['IDENTIFIER_TYPE']] = $id['ID'];
            }

            $person[] = Helper::TransferStore($data);

            if(count($person)>0){
                return response()->json(['status' =>"success",'message'=>$patientData]);
            }else{
                return response()->json(['status' =>"fail",'message'=>'Failure while inserting transfer record']);
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = array();
        $patientData = $request->all();

        foreach($patientData['patients'] as $key => $data){
            $person[] = Helper::PatientStore($data);
        }

        if(count($person)>0){
            return response()->json(['status' =>"success",'message'=>$patientData]);
        }else{
            return response()->json(['status' =>"fail",'message'=>'Failure while inserting patient records']);
        }


    }

    //get transfers in listing
    public function transfers_in(Request $request)
    {
        $mfl_code = $request->route('mflcode');

        $referral = Referral::
                    join('tbl_patient', 'tbl_refferal.ccc_no', '=', 'tbl_patient.ccc_no')
                    ->join('tbl_person', 'tbl_patient.person_id', '=', 'tbl_person.person_id')
                    ->join('tbl_master_facility', 'tbl_refferal.initiator_mfl_code', '=', 'tbl_master_facility.code')
                    ->select('tbl_refferal.initiator_mfl_code as mfl_code','tbl_master_facility.name as facility_name','tbl_refferal.initiation_date','tbl_refferal.ccc_no','tbl_person.firstname','tbl_person.middlename','tbl_person.lastname',DB::raw("IFNULL(tbl_refferal.initiation_date,'') as initiation_date"),DB::raw("IFNULL(tbl_refferal.appointment_date,'') as appointment_date"),DB::raw("IFNULL(tbl_refferal.viral_load,'') as viral_load"),DB::raw("IFNULL(tbl_refferal.last_vl_date,'') as last_vl_date"),DB::raw("IFNULL(tbl_refferal.current_regimen,'') as current_regimen"),DB::raw("IFNULL(tbl_refferal.drug_days,'') as drug_days"),DB::raw("IFNULL(tbl_refferal.transfer_status,'') as transfer_status"),DB::raw("IFNULL(tbl_refferal.transfer_intent,'') as transfer_intent"),DB::raw("IFNULL(tbl_refferal.transfer_priority,'') as transfer_priority"))
                    ->where('tbl_refferal.reffered_mfl_code', $mfl_code)
                    ->orderBy('tbl_refferal.initiation_date', 'asc')
                    ->orderBy('tbl_master_facility.name', 'asc')
                    ->distinct()
                    ->get();

        return response()->json(['status' =>"success",'message'=>$referral]);
    }

    //get transfer out status
    public function referral_status(Request $request)
    {
        $mfl_code = $request->route('mflcode');
        $patients = explode(',',(base64_decode($request->route('patients'))));

        $referral = Referral::
                    join('tbl_patient', 'tbl_refferal.ccc_no', '=', 'tbl_patient.ccc_no')
                    ->join('tbl_person', 'tbl_patient.person_id', '=', 'tbl_person.person_id')
                    ->join('tbl_master_facility', 'tbl_refferal.reffered_mfl_code', '=', 'tbl_master_facility.code')
                    ->select('tbl_refferal.reffered_mfl_code as mfl_code','tbl_master_facility.name as facility_name','tbl_refferal.initiation_date','tbl_refferal.ccc_no','tbl_person.firstname','tbl_person.middlename','tbl_person.lastname',DB::raw("IFNULL(tbl_refferal.initiation_date,'') as initiation_date"),DB::raw("IFNULL(tbl_refferal.appointment_date,'') as appointment_date"),DB::raw("IFNULL(tbl_refferal.viral_load,'') as viral_load"),DB::raw("IFNULL(tbl_refferal.last_vl_date,'') as last_vl_date"),DB::raw("IFNULL(tbl_refferal.current_regimen,'') as current_regimen"),DB::raw("IFNULL(tbl_refferal.drug_days,'') as drug_days"),DB::raw("IFNULL(tbl_refferal.transfer_status,'') as transfer_status"),DB::raw("IFNULL(tbl_refferal.transfer_intent,'') as transfer_intent"),DB::raw("IFNULL(tbl_refferal.transfer_priority,'') as transfer_priority"))
                    ->where('tbl_refferal.initiator_mfl_code', $mfl_code)
                    ->wherein('tbl_refferal.ccc_no', $patients)
                    ->orderBy('tbl_refferal.initiation_date', 'asc')
                    ->orderBy('tbl_master_facility.name', 'asc')
                    ->distinct()
                    ->get();

        return response()->json(['status' =>"success",'message'=>$referral]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
