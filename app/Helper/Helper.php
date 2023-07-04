<?php

namespace App\Helper;

use App\Models\Person;
use App\Models\Patient;
use App\Models\PatientFacility;
use App\Models\PatientObservation;
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
                    'date_of_birth' => date('Y-m-d', strtotime($data['date_of_birth'])),
                    'art_start_date' => date('Y-m-d', strtotime($data['art_start_date'])),
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
                    'from_date' => date('Y-m-d', strtotime($data['date_enrolled_in_facility'])),
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
                    'date_of_birth' => date('Y-m-d', strtotime($data['date_of_birth'])),
                    'art_start_date' => date('Y-m-d', strtotime($data['art_start_date'])),
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


                PatientFacility::where('patient_id', $rec['patient_id'])
                ->update([
                    'mfl_code' => $data['mfl_code'],
                    'from_date' => date('Y-m-d', strtotime($data['date_enrolled_in_facility'])),
                ]);
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
                    'date_of_birth' => date('Y-m-d', strtotime($data['date_of_birth'])),
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


}
