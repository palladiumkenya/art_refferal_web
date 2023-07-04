<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Helper;
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
