<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Referral;

class ReferralController extends Controller
{
    public function referral()
    {
        $referral_details = Referral::join('tbl_location', 'tbl_refferal.initiator_mfl_code', '=', 'tbl_location.mfl_code')
        ->join('tbl_master_facility', 'tbl_location.mfl_code', '=', 'tbl_master_facility.code')
        ->select('tbl_refferal.ccc_no', 'tbl_refferal.referral_type', 'tbl_refferal.initiator_mfl_code', 'tbl_refferal.reffered_mfl_code', 'tbl_refferal.initiation_date')
        ->get();

        return view('referral.index', compact('referral_details'));
    }
}
