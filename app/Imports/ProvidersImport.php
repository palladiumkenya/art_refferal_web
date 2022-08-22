<?php

namespace App\Imports;

use App\Models\Person;
use App\Models\Provider;
use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ProvidersImport implements OnEachRow, WithHeadingRow
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
        $person =  Person::create([
            "firstname" => $row['firstname'],
            "middlename" => $row['middlename'],
            "lastname" => $row['lastname'],
        ]);

        //create provider record
       Provider::create([
            'person_id' => $person['person_id'],
            'msisdn' => $row['phone_no'],
            'mfl_code' => $row['mfl_code'],
        ]);

        return $person;
    }
}
