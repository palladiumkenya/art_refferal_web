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
        'viral_load',
        'regimen',
        'tca',
    ];
}
