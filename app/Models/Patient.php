<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public $table = 'tbl_patient';
    protected $primaryKey = 'patient_id';

    protected $fillable = [
        'person_id',
        'ccc_no',
        'patient_clinic_no',
        'upi',
        'gender',
        'date_of_birth',
        'art_start_date',
        'msidn',
        'source',
    ];
}
