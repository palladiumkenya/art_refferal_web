<?php

namespace App\Helper;

use App\Models\Person;
use App\Models\Patient;
use App\Models\PatientFacility;
use App\Models\PatientObservation;

class Helper
{
    public function PatientStore($data)
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
            'ccc_no' => $data['ccc_no'],
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
        ]);

        //create patient facility
        PatientFacility::create([
            'patient_id' => $patient['patient_id'],
            'mfl_code' => $data['mfl_code'],
            'from_date' => date('Y-m-d', strtotime($data['date_enrolled_in_facility'])),
        ]);

        return  $person;
    }
}
