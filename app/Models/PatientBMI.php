<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientBMI extends Model
{
    use HasFactory;

    public $table = 'tbl_patient_bmi';

    protected $fillable = [
        'patient_id',
        'weight',
        'height',
        'observation_date',
    ];
}
