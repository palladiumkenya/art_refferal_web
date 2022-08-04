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
        'upi',
        'mfl_code',
        'date_of_birth',
        'art_start_date',
        'viral_load',
        'regimen',
        'tca',
        'msidn',
        'source',
    ];
}
