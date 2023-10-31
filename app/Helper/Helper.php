<?php

namespace App\Helper;

use App\Models\Facility;
use App\Models\FacilityLocation;
use App\Models\FacilityLocationDetail;
use App\Models\Person;
use App\Models\Patient;
use App\Models\PatientFacility;
use App\Models\PatientObservation;
use App\Models\PatientBMI;
use App\Models\PatientDiscontinuation;
use App\Models\Referral;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class Helper
{

    public function PatientStore($data)
    {
        $person = array();
        $patient_id = 0;
        //Only proccess records with CCC Number Set
        if(isset($data['CCC_NUMBER']))
        {



            //check if the patient exists
            if (DB::table('tbl_patient')
            ->where('ccc_no', $data['CCC_NUMBER'])
            ->doesntExist())
            {
                //create a new person record
                $person =  Person::create([
                    'firstname' => $data['firstname'],
                    'middlename' => $data['middlename'],
                    'lastname' => $data['lastname'],
                ]);

                //create patient record
                $patient =  Patient::create([
                    'person_id' => $person['person_id'],
                    'gender' => $data['gender'],
                    'ccc_no' => $data['CCC_NUMBER'],
                    'patient_clinic_no' => $data['CCC_NUMBER'],
                    'upi' => empty($data["NUPI"]) ? null : $data['NUPI'],
                    'date_of_birth' => $data['date_of_birth'] == '' ? null : date('Y-m-d', strtotime($data['date_of_birth'])),
                    'art_start_date' => $data['art_start_date'] == '' ? null : date('Y-m-d', strtotime($data['art_start_date'])),
                    'msidn' => $data['phone_no'],
                ]);

                //create patient observation
                $patient_id = $patient['patient_id'];
                PatientObservation::create([
                    'patient_id' => $patient['patient_id'],
                    'mfl_code' => $data['mfl_code'],
                    'viral_load' => $data['viral_load'],
                    'regimen' => $data['regimen'],
                    'tca' => date('Y-m-d', strtotime($data['tca'])),
                    'visit_date' => date('Y-m-d', strtotime($data['visit_date'])),
                    'visit_type' => $data['visit_type'],
                ]);

                //create patient facility
                PatientFacility::create([
                    'patient_id' => $patient['patient_id'],
                    'mfl_code' => $data['mfl_code'],
                    'from_date' => $data['date_enrolled_in_facility'] == '' ? null : date('Y-m-d', strtotime($data['date_enrolled_in_facility'])),
                ]);

            }
            else
            {
                //update existing patient record
                $rec = Patient::firstWhere('ccc_no', $data['CCC_NUMBER']);

               // return $rec;

                $person = Person::where('person_id', $rec['person_id'])
                ->update([
                    'firstname' => $data['firstname'],
                    'middlename' => $data['middlename'],
                    'lastname' => $data['lastname'],
                ]);

                $patient_id = $rec['patient_id'];

                $patient = Patient::where('patient_id', $rec['patient_id'])
                ->update([
                    'gender' => $data['gender'],
                    'ccc_no' => $data['CCC_NUMBER'],
                    'patient_clinic_no' => $data['CCC_NUMBER'],
                    'upi' => empty($data["NUPI"]) ? null : $data['NUPI'],
                    'date_of_birth' => $data['date_of_birth'] == '' ? null : date('Y-m-d', strtotime($data['date_of_birth'])),
                    'art_start_date' => $data['art_start_date'] == '' ? null : date('Y-m-d', strtotime($data['art_start_date'])),
                    'msidn' => $data['phone_no'],
                ]);

                if(is_null($data['regimen']))
                {
                     //Update Regimen if Exists and has been set
                     PatientObservation::updateOrCreate(
                        ['patient_id' =>  $rec['patient_id']],
                        [
                            'mfl_code' => $data['mfl_code'],
                           //'viral_load' => $data['viral_load'],
                            'tca' => date('Y-m-d', strtotime($data['tca'])),
                            'visit_date' => date('Y-m-d', strtotime($data['visit_date'])),
                            'visit_type' => $data['visit_type'],
                        ]
                    );
                }else
                {
                    PatientObservation::updateOrCreate(
                        ['patient_id' =>  $rec['patient_id']],
                        [
                            'mfl_code' => $data['mfl_code'],
                            'viral_load' => $data['viral_load'],
                            'regimen' => $data['regimen'],
                             'tca' => date('Y-m-d', strtotime($data['tca'])),
                             'visit_date' => date('Y-m-d', strtotime($data['visit_date'])),
                             'visit_type' => $data['visit_type'],
                        ]
                    );

                }

                if( !(is_null($data['date_enrolled_in_facility'])) )
                {
                    PatientFacility::updateOrCreate(
                        ['patient_id' =>  $rec['patient_id']],
                        [
                            'mfl_code' => $data['mfl_code'],
                            'from_date' => $data['date_enrolled_in_facility'] == '' ? null : date('Y-m-d', strtotime($data['date_enrolled_in_facility'])),
                        ]
                    );
                }
            }

            if( !(is_null($data['weight'])) && !(is_null($data['height'])) )
            {
                //capture the patient's bmi
                $observation_date = trim($data['observation_date']) == '' ? null : date('Y-m-d', strtotime($data['observation_date']));
                $bmi = PatientBMI::updateOrCreate(
                    ['patient_id' => $patient_id, 'observation_date' => $observation_date],
                    ['weight' => $data['weight'], 'height' => $data['height']]
                );
            }

        }

        return  $person;

    }

    public function AppointmentStore($data)
    {
        $person = array();
        //Only proccess records with CCC Number Set
        if(isset($data['CCC_NUMBER']))
        {


            //check if the patient exists
            if (DB::table('tbl_patient')
                ->where('ccc_no', $data['CCC_NUMBER'])
                ->exists())
                {
                    //update existing patient record
                    $rec = Patient::firstWhere('ccc_no', $data['CCC_NUMBER']);

                    $patient = Patient::where('patient_id', $rec['patient_id'])
                    ->update([
                        'gender' => $data['gender'],
                        'ccc_no' => $data['CCC_NUMBER'],
                        'patient_clinic_no' => $data['CCC_NUMBER'],
                        'upi' => empty($data["NUPI"]) ? null : $data['NUPI'],
                        'date_of_birth' => $data['date_of_birth'] == '' ? null : date('Y-m-d', strtotime($data['date_of_birth'])),
                        //'art_start_date' => date('Y-m-d', strtotime($data['art_start_date'])),
                        'msidn' => $data['phone_no'],
                    ]);

                    //Update TCA
                    PatientObservation::where('patient_id', $rec['patient_id'])
                    ->update([
                        'mfl_code' => $data['mfl_code'],
                        'viral_load' => $data['viral_load'],
                        'regimen' => $data['regimen'],
                        'tca' => date('Y-m-d', strtotime($data['tca'])),
                        'visit_date' => date('Y-m-d', strtotime($data['visit_date'])),
                        'visit_type' => $data['visit_type'],
                    ]);


                }
        }

        return  $person;

    }

    public function DiscontinuationStore($data,$patientData)
    {
        $person = array();
        $patient = array();
        $patient_id = 0;

        //check if the patient exists
        if (DB::table('tbl_patient')
            ->where('ccc_no', $data['CCC_NUMBER'])
            ->doesntExist())
            {
                //create a new person record
                $person =  Person::create([
                    'firstname' => $data['firstname'],
                    'middlename' => $data['middlename'],
                    'lastname' => $data['lastname'],
                ]);

                //create patient record
                $patient =  Patient::create([
                    'person_id' => $person['person_id'],
                    'gender' => $data['gender'],
                    'ccc_no' => $data['CCC_NUMBER'],
                    'patient_clinic_no' => $data['CCC_NUMBER'],
                    'upi' => empty($data["NUPI"]) ? null : $data['NUPI'],
                    'date_of_birth' => $data['date_of_birth'] == '' ? null : date('Y-m-d', strtotime($data['date_of_birth'])),
                    'art_start_date' => $data['art_start_date'] == '' ? null : date('Y-m-d', strtotime($data['art_start_date'])),
                    'msidn' => $data['phone_no'],
                ]);

                //create patient facility
                $patient_id = $patient['patient_id'];
                PatientFacility::create([
                    'patient_id' => $patient['patient_id'],
                    'mfl_code' => $data['mfl_code'],
                    'from_date' => $data['date_enrolled_in_facility'] == '' ? null : date('Y-m-d', strtotime($data['date_enrolled_in_facility'])),
                ]);

            }
            else
            {
                //update existing patient record
                $rec = Patient::firstWhere('ccc_no', $data['CCC_NUMBER']);

               // return $rec;

                $person = Person::where('person_id', $rec['person_id'])
                ->update([
                    'firstname' => $data['firstname'],
                    'middlename' => $data['middlename'],
                    'lastname' => $data['lastname'],
                ]);

                $patient_id = $rec['patient_id'];
                $patient = Patient::where('patient_id', $rec['patient_id'])
                ->update([
                    'gender' => $data['gender'],
                    'ccc_no' => $data['CCC_NUMBER'],
                    'patient_clinic_no' => $data['CCC_NUMBER'],
                    'upi' => empty($data["NUPI"]) ? null : $data['NUPI'],
                    'date_of_birth' => $data['date_of_birth'] == '' ? null : date('Y-m-d', strtotime($data['date_of_birth'])),
                    'art_start_date' => $data['art_start_date'] == '' ? null : date('Y-m-d', strtotime($data['art_start_date'])),
                    'msidn' => $data['phone_no'],
                    'is_active' => 0,
                ]);

                if( !(is_null($data['date_enrolled_in_facility'])) )
                {
                    PatientFacility::where('patient_id', $rec['patient_id'])
                    ->update([
                        'mfl_code' => $data['mfl_code'],
                        'from_date' => $data['date_enrolled_in_facility'] == '' ? null : date('Y-m-d', strtotime($data['date_enrolled_in_facility'])),
                    ]);
                }
            }

        //capture the discontinuation
        $effective_discontinuation_date = $data['effective_discontinuation_date'] == '' ? null : date('Y-m-d', strtotime($data['effective_discontinuation_date']));
        $discontinuation = PatientDiscontinuation::create([
            'patient_id' => $patient_id,
            'discontinuation_reason' => $data['discontinuation_reason'],
            'effective_discontinuation_date' => $effective_discontinuation_date,
            'death_date' => $data['death_date'] == '' ? null : date('Y-m-d', strtotime($data['death_date'])),
            'death_indicator' => $data['death_indicator'],
        ]);

        if(!empty($data["service_request"]))
        {
            //capture the transfer out
            $service_request = $data["service_request"];

            //check if this client has an open silent transfer to the receiving facility
            if (DB::table('tbl_refferal')
            ->where('ccc_no', $data['CCC_NUMBER'])
            ->where('reffered_mfl_code', $service_request['RECEIVING_FACILITY_MFLCODE'])
            ->whereNull('initiator_mfl_code')
            ->exists())
            {
                //update that transfer record
                // $rec = Referral::Where('ccc_no', $data['CCC_NUMBER'])
                //                 ->where('reffered_mfl_code', $service_request['RECEIVING_FACILITY_MFLCODE'])
                //                 ->whereNull('initiator_mfl_code')
                //                 ->skip(0)
                //                 ->take(1)
                //                 ->get();

                $referral = Referral::where('ccc_no', $data['CCC_NUMBER'])
                ->where('reffered_mfl_code', $service_request['RECEIVING_FACILITY_MFLCODE'])
                ->whereNull('initiator_mfl_code')
                ->update([
                        'initiator_mfl_code' => $service_request['SENDING_FACILITY_MFLCODE'],
                        'referral_type' => 'Normal',
                        'initiation_date' => $service_request['TRANSFER_OUT_DATE'] == '' ? $effective_discontinuation_date : date('Y-m-d', strtotime($service_request['TRANSFER_OUT_DATE'])),
                        'r_status' => 1 ,
                        'supporting_info' => json_encode($patientData),
                        'updated_date' => date('Y-m-d H:i:s'),
                    ]);
            }else{
                if (DB::table('tbl_refferal')
                ->where('ccc_no', $data['CCC_NUMBER'])
                ->where('reffered_mfl_code', $service_request['RECEIVING_FACILITY_MFLCODE'])
                ->where('initiator_mfl_code', $service_request['SENDING_FACILITY_MFLCODE'])
                ->where('initiation_date', date('Y-m-d', strtotime($service_request['TRANSFER_OUT_DATE'])))
                ->doesntExist())
                {
                    //create transfer record
                    $referral = Referral::create([
                        'ccc_no' => $data['CCC_NUMBER'],
                        'referral_type' => 'Normal',
                        'initiation_date' => $service_request['TRANSFER_OUT_DATE'] == '' ? $effective_discontinuation_date : date('Y-m-d', strtotime($service_request['TRANSFER_OUT_DATE'])),
                        'initiator_mfl_code' => $service_request['SENDING_FACILITY_MFLCODE'],
                        'reffered_mfl_code' => $service_request['RECEIVING_FACILITY_MFLCODE'],
                        'transfer_status' => $service_request['TRANSFER_STATUS'],
                        'transfer_intent' => $service_request['TRANSFER_INTENT'],
                        'transfer_priority' => $service_request['TRANSFER_PRIORITY'],
                        'supporting_info' => json_encode($patientData),
                        'created_date' => date('Y-m-d H:i:s'),
                        'updated_date' => date('Y-m-d H:i:s'),
                    ]);
                }

            }


            //get the facilities contact information
            $sending_facility = static::get_facility_contact_info($service_request['SENDING_FACILITY_MFLCODE']);
            $receiving_facility = static::get_facility_contact_info($service_request['RECEIVING_FACILITY_MFLCODE']);

            // get the message content to be sent
            if(!empty($sending_facility[0]['telephone']) && !empty($receiving_facility[0]['telephone']))
            {
                $message = Message::firstWhere('message_type', 'transfer_out');
                $msg = $message['message_content'];

                $message_params = array(
                                            "www" => $data['CCC_NUMBER'],
                                            "xxx" => $sending_facility[0]['name'],
                                            "yyy" => $sending_facility[0]['telephone'],
                                            "zzz" => $effective_discontinuation_date,

                                        );

                $msg = static::message_formulate($msg,$message_params);
                $source  = '40149'; //env('SMS_SERVICE_KEY', '');

                //send the sms notifications
                static::send_sms($source, $receiving_facility[0]['telephone'], $msg);
            }

        }

        return  $discontinuation;
    }

    public function TransferInStore($data)
    {
        $transfer_in = array();

        if (DB::table('tbl_refferal')
        ->where('ccc_no', $data['CCC_NUMBER'])
        ->where('initiator_mfl_code', $data['sending_facility_mflcode'])
        ->where('reffered_mfl_code', $data['receiving_facility_mflcode'])
        ->where('transfer_status', 'ACTIVE')
        ->exists())
        {
            //capture the transfer in event
            $transfer_in = Referral::where('ccc_no', $data['CCC_NUMBER'])
            ->where('initiator_mfl_code', $data['sending_facility_mflcode'])
            ->where('reffered_mfl_code', $data['receiving_facility_mflcode'])
            ->where('transfer_status', 'ACTIVE')
            ->update([
                    'transfer_status' => $data['transfer_status'],
                    'r_status' => 1 ,
                    'acceptance_date' => $data['to_acceptance_date'] == '' ? date('Y-m-d') : date('Y-m-d', strtotime($data['to_acceptance_date'])),
                ]);

            //get the facilities contact information
            $sending_facility = static::get_facility_contact_info($data['sending_facility_mflcode']);
            $receiving_facility = static::get_facility_contact_info($data['receiving_facility_mflcode']);

            // get the message content to be sent
            if(!empty($sending_facility[0]['telephone']) && !empty($receiving_facility[0]['telephone']))
            {
                $message = Message::firstWhere('message_type', 'transfer_in');
                $msg = $message['message_content'];

                $message_params = array(
                                            "www" => $data['CCC_NUMBER'],
                                            "xxx" => $receiving_facility[0]['name'],
                                            "yyy" => $receiving_facility[0]['telephone'],

                                        );

                $msg = static::message_formulate($msg,$message_params);
                $source  = '40149'; //env('SMS_SERVICE_KEY', '');

                //send the sms notifications
                static::send_sms($source, $sending_facility[0]['telephone'], $msg);
            }

        }else{
            //capture the silent transfer in
            $transfer_in = Referral::create([
                'ccc_no' => $data['CCC_NUMBER'],
                'referral_type' => 'Silent',
                'initiation_date' => $data['to_acceptance_date'] == '' ? date('Y-m-d') : date('Y-m-d', strtotime($data['to_acceptance_date'])),
                'acceptance_date' => $data['to_acceptance_date'] == '' ? date('Y-m-d') : date('Y-m-d', strtotime($data['to_acceptance_date'])),
                'initiator_mfl_code' => null,
                'reffered_mfl_code' => $data['receiving_facility_mflcode'],
                'transfer_status' => $data['transfer_status'],
                'transfer_intent' => $data['transfer_intent'],
                'transfer_priority' => $data['transfer_priority'],
                'supporting_info' => null,
                'r_status' => 1 ,
                'created_date' => date('Y-m-d H:i:s'),
                'updated_date' => date('Y-m-d H:i:s'),
            ]);

        }

        return  $transfer_in;
    }

    public static function get_facility_contact_info($mfl_code)
    {
        return Facility::
        join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
        ->leftJoin('tbl_location_details', 'tbl_location.location_id', '=', 'tbl_location_details.location_id')
        ->select('tbl_master_facility.code','tbl_master_facility.name',DB::raw("IFNULL(tbl_master_facility.facility_type,'') as facility_type"),DB::raw("IFNULL(tbl_location_details.telephone,'') as telephone"))
        ->where('tbl_master_facility.code',$mfl_code)
        ->where('tbl_location_details.location_type',1)
        ->orderBy('tbl_master_facility.name', 'asc')
        ->distinct()
        ->get();
    }

    public static function message_formulate($msg,$params)
    {
        foreach($params as $key => $val)
        {
            $msg = str_replace("$key","$val",$msg);
        }
        return $msg;
    }

    public static function send_sms($source, $destination, $message)
    {

        $key = "2aYBQWzHwvp6l0JsCHgxVt8s91A"; //env('SMS_SERVICE_KEY', '');
        $host = env('SMS_SERVICE_HOST', '127.0.0.1:8181/api/sender');
        //"https://sms-service.kenyahmis.org/api/sender";//



        $httpresponse = Http::
                                withoutVerifying()
                                ->withHeaders(['api-token'=> "$key"])
                                ->post("$host", [
                                        'destination' => $destination,
                                        'msg' => $message,
                                        'sender_id' => $destination,
                                        'gateway' => $source,
                                    ]);

       return json_decode( $httpresponse->getBody(), true);

    }


}
