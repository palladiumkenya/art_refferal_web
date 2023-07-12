<?php

namespace App\Helper;

use App\Models\Person;
use App\Models\Patient;
use App\Models\PatientFacility;
use App\Models\PatientObservation;
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
                    'upi' => $data['upi'] == '' ? null : $data['upi'],
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
                    'upi' => $data['upi'] == '' ? null : $data['upi'],
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
                    'upi' => $data['upi'] == '' ? null : $data['upi'],
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

    public function TransferStore($data)
    {
        $person = array();
        $patient = array();

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
                    'upi' => $data['upi'] == '' ? null : $data['upi'],
                    'date_of_birth' => $data['date_of_birth'] == '' ? null : date('Y-m-d', strtotime($data['date_of_birth'])),
                    'art_start_date' => $data['art_start_date'] == '' ? null : date('Y-m-d', strtotime($data['art_start_date'])),
                    'msidn' => $data['phone_no'],
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
                    'upi' => $data['upi'] == '' ? null : $data['upi'],
                    'date_of_birth' => $data['date_of_birth'] == '' ? null : date('Y-m-d', strtotime($data['date_of_birth'])),
                    'art_start_date' => $data['art_start_date'] == '' ? null : date('Y-m-d', strtotime($data['art_start_date'])),
                    'msidn' => $data['phone_no'],
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

        //check if patient has an active/open transfer record
        if (DB::table('tbl_refferal')
        ->where('ccc_no', $data['CCC_NUMBER'])
        ->where('initiator_mfl_code', $data['transfer_out_facility'])
        ->where('reffered_mfl_code', $data['transfer_in_facility'])
        ->where('transfer_status', 'ACTIVE')
        ->doesntExist())
        {
            //create transfer record
           $referral = Referral::create([
                'ccc_no' => $data['CCC_NUMBER'],
                'referral_type' => $data['Normal'],
                'initiation_date' => $data['initiation_date'] == '' ? null : date('Y-m-d', strtotime($data['initiation_date'])),
                'initiator_mfl_code' => $data['transfer_out_facility'],
                'reffered_mfl_code' => $data['transfer_in_facility'],
                'appointment_date' => $data['tca'] == '' ? null : date('Y-m-d', strtotime($data['tca'])),
                'viral_load' => $data['viral_load'],
                'last_vl_date' => $data['last_vl_date'] == '' ? null : date('Y-m-d', strtotime($data['last_vl_date'])),
                'current_regimen' => $data['regimen'],
                'acceptance_date' => $data['acceptance_date'] == '' ? null : date('Y-m-d', strtotime($data['acceptance_date'])),
                'created_date' => date('Y-m-d'),
                'updated_date' => date('Y-m-d'),
                'transfer_status' => $data['transfer_status'],
                'transfer_intent' => $data['transfer_intent'],
                'transfer_priority' => $data['transfer_priority'],
            ]);

        }else{
            //update transfer record
            $rec = Referral::firstWhere('ccc_no', $data['CCC_NUMBER'])
                            ->where('initiator_mfl_code', $data['transfer_out_facility'])
                            ->where('reffered_mfl_code', $data['transfer_in_facility'])
                            ->where('transfer_status', 'ACTIVE');

            $referral = Person::where('refferal_id', $rec['refferal_id'])
            ->update([
                'ccc_no' => $data['CCC_NUMBER'],
                'referral_type' => $data['Normal'],
                'initiation_date' => $data['initiation_date'] == '' ? null : date('Y-m-d', strtotime($data['initiation_date'])),
                'initiator_mfl_code' => $data['transfer_out_facility'],
                'reffered_mfl_code' => $data['transfer_in_facility'],
                'appointment_date' => $data['tca'] == '' ? null : date('Y-m-d', strtotime($data['tca'])),
                'viral_load' => $data['viral_load'],
                'last_vl_date' => $data['last_vl_date'] == '' ? null : date('Y-m-d', strtotime($data['last_vl_date'])),
                'current_regimen' => $data['regimen'],
                'acceptance_date' => $data['acceptance_date'] == '' ? null : date('Y-m-d', strtotime($data['acceptance_date'])),
                'created_date' => date('Y-m-d'),
                'updated_date' => date('Y-m-d'),
                'transfer_status' => $data['transfer_status'],
                'transfer_intent' => $data['transfer_intent'],
                'transfer_priority' => $data['transfer_priority'],
            ]);
        }


        return  $referral;
    }


}
