<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientViralLoad extends Model
{
    use HasFactory;
    public $table = 'tbl_patient_viral_load';

    protected $fillable = [
        'patient_id',
        'viral_load',
        'viral_load_date',
    ];
}
