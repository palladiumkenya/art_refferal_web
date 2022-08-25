<?php

namespace App\Imports;

use App\Models\Patient;
use App\Models\Person;
use App\Models\PatientFacility;
use App\Models\PatientObservation;
use App\Models\Facility;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class PatientsImport implements OnEachRow, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function onRow(Row $row)
    {

        $rowIndex = $row->getIndex();
        $row      = $row->toArray();

         //create a new person record
        $person = Person::create([
            "firstname" => $row['firstname'],
            "middlename" => $row['middlename'],
            "lastname" => $row['lastname'],
        ]);

        //create patient record
        $patient =  Patient::create([
            'person_id' => $person['person_id'],
            'ccc_no' => $row['ccc_no'],
            'upi' => $row['upi'] == '' ? null : $row['upi'],
            'date_of_birth' => date('Y-m-d', strtotime($row['date_of_birth'])),
            'art_start_date' => date('Y-m-d', strtotime($row['art_start_date'])),
            'msidn' => $row['phone_no'],
        ]);

        //create patient observation
        PatientObservation::create([
            'patient_id' => $patient['patient_id'],
            'mfl_code' => $row['mfl_code'],
            'viral_load' => $row['viral_load'],
            'regimen' => $row['regimen'],
            'tca' => date('Y-m-d', strtotime($row['tca'])),
        ]);

        //create patient facility
        PatientFacility::create([
            'patient_id' => $patient['patient_id'],
            'mfl_code' => $row['mfl_code'],
            'from_date' => date('Y-m-d', strtotime($row['from_date'])),
        ]);

        return $person;
    }

    public function rules(): array
    {
        return [
            '*.firstname' => 'required',
            '*.middlename' => 'required',
        ];
        // return [
        //     'firstname' => Rule::in(['required', 'string', 'max:150']),
        //     'middlename' => Rule::in(['max:150']),
        //     'lastname' => Rule::in(['required', 'string', 'max:150']),
        //     'ccc_no' => Rule::in(['required', 'string', 'unique:tbl_patient']),
        //     'upi' => Rule::in(['max:45']),
        //     'mfl_code' => Rule::in(['required', 'string']),
        //     'date_of_birth' => Rule::in(['required']),
        //     'art_start_date' => Rule::in(['required']),
        //     'from_date' => Rule::in(['required']),
        //     'viral_load' => Rule::in(['required', 'string', 'max:100']),
        //     'regimen' => Rule::in(['required', 'string', 'max:100']),
        //     'tca' => Rule::in(['required']),
        //     'phone_no' => Rule::in(['required','string']),
        // ];
    }
}
