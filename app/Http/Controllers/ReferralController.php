<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Referral;
use App\Models\ReferralData;
use Auth;
use Illuminate\Support\Facades\DB;

class ReferralController extends Controller
{
    public function referral()
    {
        $referral_details = array();

        if (Auth::user()->role_id == '1') {
            $referral_details = ReferralData::select('*')->get();
        }
        if (Auth::user()->role_id == '2') {
            // $referral_details = Referral::join('tbl_location', 'tbl_refferal.initiator_mfl_code', '=', 'tbl_location.mfl_code')
            //     ->join('tbl_master_facility', 'tbl_location.mfl_code', '=', 'tbl_master_facility.code')
            //     ->select('tbl_refferal.ccc_no', 'tbl_refferal.referral_type', 'tbl_refferal.initiator_mfl_code', 'tbl_refferal.reffered_mfl_code', 'tbl_refferal.initiation_date')
            //     ->where('tbl_location.partner_id', Auth::user()->partner_id)
            //     ->get();
            $referral_details = ReferralData::select('*')
                ->where('partner_id', Auth::user()->partner_id)
                ->get();
        }
        if (Auth::user()->role_id == '3') {
            $referral_details = ReferralData::select('*')
                ->where('initiator_mfl_code', Auth::user()->mfl_code)
                ->get();
        }
        if (Auth::user()->role_id == '4') {

        }


        return view('referral.index', compact('referral_details'));
    }
}
