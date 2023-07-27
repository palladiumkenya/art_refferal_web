<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientDiscontinuation extends Model
{
    use HasFactory;
    public $table = 'tbl_patient_discontinuation';

    protected $fillable = [
        'patient_id',
        'discontinuation_reason',
        'effective_discontinuation_date',
        'death_date',
        'death_indicator',
    ];
}
