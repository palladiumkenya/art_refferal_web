<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientFacility extends Model
{
    use HasFactory;
    public $table = 'tbl_patient_facilities';

    protected $fillable = [
        'patient_id',
        'mfl_code',
        'from_date',
        'to_date',
    ];
}
