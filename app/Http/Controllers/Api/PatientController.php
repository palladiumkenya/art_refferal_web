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
        // dd($patientData);
        //Log::debug($patientData);
        //Process Registration Message

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
        $data['visit_type'] = null;
        $data['viral_load'] = null;
        $data['viral_load_date'] = null;
        $data['regimen'] = null;
        $data['initiation_date']= null;
        $data['acceptance_date']= null;
        $data['last_vl_date']= null;
        $data['drug_days']= null;
        $data['who_stage']= null;
        $data['height']= null;
        $data['weight']= null;
        $data['observation_date']= null;

        $message_type = $patientData["MESSAGE_HEADER"]["MESSAGE_TYPE"];

        if(!empty($patientData["APPOINTMENT_INFORMATION"])){
            foreach($patientData["APPOINTMENT_INFORMATION"] as $appointment)
            {
                $data['tca'] = $appointment['APPOINTMENT_DATE'];
                $data['visit_date'] = $appointment['VISIT_DATE'];
                $data['visit_type'] = $appointment['APPOINTMENT_TYPE'];
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
                        case "START_REGIMEN":
                            $data['regimen'] = $obs['OBSERVATION_VALUE'];
                        break;
                        case "CURRENT_REGIMEN":
                            $data['regimen'] = $obs['OBSERVATION_VALUE'];
                        break;
                        case "CURRENT REGIMEN":
                            $data['regimen'] = $obs['OBSERVATION_VALUE'];
                        break;
                        case "WHO_STAGE":
                            $data['who_stage'] = $obs['OBSERVATION_VALUE'];
                        break;
                        case "WHO STAGE":
                            $data['who_stage'] = $obs['OBSERVATION_VALUE'];
                        break;
                        case "START_HEIGHT":
                            $data['height'] = $obs['OBSERVATION_VALUE'];
                        break;
                        case "HEIGHT":
                            $data['height'] = $obs['OBSERVATION_VALUE'];
                        break;
                        case "START_WEIGHT":
                            $data['weight'] = $obs['OBSERVATION_VALUE'];
                            $data['observation_date'] = $obs['OBSERVATION_DATETIME'];
                        break;
                        case "WEIGHT":
                            $data['weight'] = $obs['OBSERVATION_VALUE'];
                            $data['observation_date'] = $obs['OBSERVATION_DATETIME'];
                        break;
                        case "LAST LV DATE":
                            $data['viral_load_date'] = $obs['OBSERVATION_VALUE'];
                        break;
                        case "LAST LV RESULT":
                            $data['viral_load'] = $obs['OBSERVATION_VALUE'];
                        break;
                }
            }
        }

        if(($message_type == 'ADT^A04') || ($message_type == 'ADT^A08' ) || ($message_type == 'SIU^S12' ))
        {
            $person[] = Helper::PatientStore($data);

        }
        else if($message_type == 'SIU^S20') //Process patient discontinuation
        {
            $discontinuation_message = $patientData["DISCONTINUATION_MESSAGE"];

            $data['discontinuation_reason']= $discontinuation_message["DISCONTINUATION_REASON"];
            $data['effective_discontinuation_date']= $discontinuation_message["EFFECTIVE_DISCONTINUATION_DATE"];
            $data['death_date']= $patientData["PATIENT_IDENTIFICATION"]["DEATH_DATE"];
            $data['death_indicator']= $patientData["PATIENT_IDENTIFICATION"]["DEATH_INDICATOR"];
            $data['service_request'] = $discontinuation_message["SERVICE_REQUEST"];

            $person[] = Helper::DiscontinuationStore($data,$patientData);
        }
        else if($message_type == 'SIU^S21') //Process patient discontinuation
        {
            $enrollment_message = $patientData["PROGRAM_ENROLLMENT_MESSAGE"]["SERVICE_REQUEST"];

            $data['sending_facility_mflcode'] = $enrollment_message["SENDING_FACILITY_MFLCODE"];
            $data['receiving_facility_mflcode'] = $enrollment_message["RECEIVING_FACILITY_MFLCODE"];
            $data['transfer_status'] = $enrollment_message["TRANSFER_STATUS"];
            $data['transfer_intent'] = $enrollment_message["TRANSFER_INTENT"];
            $data['transfer_priority'] = $enrollment_message["TRANSFER_PRIORITY"];
            $data['to_acceptance_date'] = $enrollment_message["TO_ACCEPTANCE_DATE"];

            $person[] = Helper::TransferInStore($data);
        }

        if(count($person)>0){
            return response()->json(['status' =>"success",'message'=>$patientData]);
        }else{
            return response()->json(['status' =>"fail",'message'=>'Failure while inserting patient record']);
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
        $response = array();
        $mfl_code = $request->route('mflcode');
        $created_at = date('Y-m-d H:i:s',strtotime($request->route('createdAt')));
        $pull_timestamp ="";

        $referral = Referral::
                    join('tbl_patient', 'tbl_refferal.ccc_no', '=', 'tbl_patient.ccc_no')
                    ->join('tbl_person', 'tbl_patient.person_id', '=', 'tbl_person.person_id')
                    ->join('tbl_master_facility', 'tbl_refferal.initiator_mfl_code', '=', 'tbl_master_facility.code')
                    ->select('tbl_refferal.created_at','tbl_refferal.supporting_info as data')
                    ->where('tbl_refferal.reffered_mfl_code', $mfl_code)
                    ->where('tbl_refferal.transfer_status', 'ACTIVE')
                    ->where('tbl_refferal.created_at','>', $created_at)
                    ->orderBy('tbl_refferal.created_at', 'asc')
                    ->distinct()
                    ->get();
        foreach($referral as $row)
        {
            $pull_timestamp = date('YmdHis', strtotime($row['created_at']));
            $response[] = json_decode($row['data'],true);
        }

        return response()->json([
                                    'status' =>"success",
                                    "pull_timestamp"=>$pull_timestamp,
                                    'message'=>$response
                                ]);

        /*
            ->select('tbl_refferal.initiator_mfl_code as mfl_code','tbl_master_facility.name as facility_name','tbl_refferal.initiation_date','tbl_refferal.ccc_no','tbl_person.firstname','tbl_person.middlename','tbl_person.lastname',DB::raw("IFNULL(tbl_refferal.initiation_date,'') as initiation_date"),DB::raw("IFNULL(tbl_refferal.appointment_date,'') as appointment_date"),DB::raw("IFNULL(tbl_refferal.viral_load,'') as viral_load"),DB::raw("IFNULL(tbl_refferal.last_vl_date,'') as last_vl_date"),DB::raw("IFNULL(tbl_refferal.current_regimen,'') as current_regimen"),DB::raw("IFNULL(tbl_refferal.drug_days,'') as drug_days"),DB::raw("IFNULL(tbl_refferal.transfer_status,'') as transfer_status"),DB::raw("IFNULL(tbl_refferal.transfer_intent,'') as transfer_intent"),DB::raw("IFNULL(tbl_refferal.transfer_priority,'') as transfer_priority"))
        */
    }

    //get transfer out status
    public function referral_status(Request $request)
    {
        $mfl_code = $request->route('mflcode');
        $patients = explode(',',str_replace(' ','',base64_decode($request->route('patients'))));

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
