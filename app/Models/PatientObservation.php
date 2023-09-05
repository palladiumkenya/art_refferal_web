<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientObservation extends Model
{
    use HasFactory;
    public $table = 'tbl_patient_observations';

    protected $fillable = [
        'patient_id',
        'mfl_code',
        'visit_date',
        'viral_load',
        'viral_load_date',
        'regimen',
        'blood_pressure',
        'height',
        'weight',
        'muac',
        'who_stage',
        'tca',
        'visit_type',
    ];
}
