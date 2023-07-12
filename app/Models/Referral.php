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
        'ccc_no',
        'referral_type',
        'initiation_date',
        'initiator_id',
        'initiator_mfl_code',
        'reffered_mfl_code',
        'appointment_date',
        'viral_load',
        'last_vl_date',
        'current_regimen',
        'r_status',
        'acceptance_date',
        'acceptor_id',
        'drug_days',
        'created_date',
        'updated_date',
        'transfer_status',
        'transfer_intent',
        'transfer_priority',
    ];
}
