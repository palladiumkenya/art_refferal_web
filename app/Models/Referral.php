<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use HasFactory;
    public $table = 'tbl_refferal';
    protected $primaryKey = 'refferal_id';

    protected $fillable = [
        'refferal_id',
        'ccc_no',
        'referral_type',
        'initiation_date',
        'initiator_id',
        'initiator_mfl_code',
        'reffered_mfl_code',
        'appointment_date',
        'current_regimen',
        'r_status',
        'acceptance_date',
        'acceptor_id',
        'drug_days',
        'created_date',
        'created_by',
        'updated_date',
        'updated_by',
    ];
}
