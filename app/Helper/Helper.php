<?php

namespace App\Helper;

use App\Models\Person;
use App\Models\Patient;
use App\Models\PatientFacility;
use App\Models\PatientObservation;
use App\Models\PatientDiscontinuation;
use App\Models\Referral;
use Illuminate\Support\Facades\DB;

class Helper
{
    public function PatientStore($data)
    {
        $person = array();

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
                PatientObservation::create([
                    'patient_id' => $patient['patient_id'],
                    'mfl_code' => $data['mfl_code'],
                    'viral_load' => $data['viral_load'],
                    'regimen' => $data['regimen'],
                    'tca' => date('Y-m-d', strtotime($data['tca'])),
                    'visit_date' => date('Y-m-d', strtotime($data['visit_date'])),
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
                    PatientObservation::where('patient_id', $rec['patient_id'])
                    ->update([
                        'mfl_code' => $data['mfl_code'],
                       //'viral_load' => $data['viral_load'],
                        'tca' => date('Y-m-d', strtotime($data['tca'])),
                        'visit_date' => date('Y-m-d', strtotime($data['visit_date'])),
                    ]);
                }else
                {
                    PatientObservation::where('patient_id', $rec['patient_id'])
                    ->update([
                        'mfl_code' => $data['mfl_code'],
                        'viral_load' => $data['viral_load'],
                        'regimen' => $data['regimen'],
                         'tca' => date('Y-m-d', strtotime($data['tca'])),
                         'visit_date' => date('Y-m-d', strtotime($data['visit_date'])),
                    ]);

                }

                if( !(is_null($data['date_enrolled_in_facility'])) )
                {
                    PatientFacility::where('patient_id', $rec['patient_id'])
                    ->update([
                        'mfl_code' => $data['mfl_code'],
                        'from_date' => $data['date_enrolled_in_facility'] == '' ? null : date('Y-m-d', strtotime($data['date_enrolled_in_facility'])),
                    ]);
                }
            }

        return  $person;

    }

    public function AppointmentStore($data)
    {
        $person = array();

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
                ]);


            }
            else
            {

            }

        return  $person;

    }

    public function DiscontinuationStore($data)
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
        $discontinuation = PatientDiscontinuation::create([
            'patient_id' => $patient_id,
            'discontinuation_reason' => $data['discontinuation_reason'],
            'effective_discontinuation_date' => $data['effective_discontinuation_date'] == '' ? null : date('Y-m-d', strtotime($data['effective_discontinuation_date'])),
            'death_date' => $data['death_date'] == '' ? null : date('Y-m-d', strtotime($data['death_date'])),
            'death_indicator' => $data['death_indicator'],
        ]);

        if(!empty($data["service_request"]))
        {
            //capture the transfer out
            $service_request = $data["service_request"];

            //create transfer record
            $referral = Referral::create([
                'ccc_no' => $data['CCC_NUMBER'],
                'referral_type' => 'Normal',
                'initiation_date' => $service_request['TRANSFER_OUT_DATE'] == '' ? null : date('Y-m-d', strtotime($service_request['TRANSFER_OUT_DATE'])),
                'initiator_mfl_code' => $service_request['SENDING_FACILITY_MFLCODE'],
                'reffered_mfl_code' => $service_request['RECEIVING_FACILITY_MFLCODE'],
                'transfer_status' => $service_request['TRANSFER_STATUS'],
                'transfer_intent' => $service_request['TRANSFER_INTENT'],
                'transfer_priority' => $service_request['TRANSFER_PRIORITY'],
                'supporting_info' => json_encode($service_request['SUPPORTING_INFO']),
                'created_date' => date('Y-m-d'),
                'updated_date' => date('Y-m-d'),
            ]);

        }

        return  $discontinuation;
    }

    public function TransferInStore($data)
    {
        $transfer_in = array();

        //capture the transfer in event
        $transfer_in = Referral::where('ccc_no', $data['CCC_NUMBER'])
        // ->where('initiator_mfl_code', $data['sending_facility_mflcode'])
        // ->where('reffered_mfl_code', $data['receiving_facility_mflcode'])
        ->where('transfer_status', 'ACTIVE')
        ->update([
                'transfer_status' => $data['transfer_status'],
                'acceptance_date' => date('Y-m-d'),
                // 'acceptance_date' => $data['to_acceptance_date'] == '' ? null : date('Y-m-d', strtotime($data['to_acceptance_date'])),
            ]);

        return  $transfer_in;
    }


}
