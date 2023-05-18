<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Referral;
use Auth;
use Illuminate\Support\Facades\DB;

class ReferralController extends Controller
{
    public function referral()
    {
        if (Auth::user()->role_id == '1') {
            $referral_details = Referral::join('tbl_location', 'tbl_refferal.initiator_mfl_code', '=', 'tbl_location.mfl_code')
                ->join('tbl_master_facility', 'tbl_location.mfl_code', '=', 'tbl_master_facility.code')
                // ->select('tbl_refferal.ccc_no', 'tbl_refferal.referral_type', 'tbl_refferal.initiator_mfl_code', 'tbl_refferal.reffered_mfl_code', 'tbl_refferal.initiation_date')
                ->select('tbl_refferal.ccc_no', 'tbl_refferal.referral_type', DB::raw("CASE WHEN tbl_refferal.referral_type = 'Silent' THEN CONCAT(tbl_master_facility.name, ' - ', tbl_refferal.initiator_mfl_code) END as initiator_mfl_code"),  DB::raw("CASE WHEN tbl_refferal.referral_type = 'Normal' THEN CONCAT(tbl_master_facility.name, ' - ', tbl_refferal.reffered_mfl_code) END as reffered_mfl_code"), 'tbl_refferal.initiation_date')
                ->get();
        }
        if (Auth::user()->role_id == '2') {
            $referral_details = Referral::join('tbl_location', 'tbl_refferal.initiator_mfl_code', '=', 'tbl_location.mfl_code')
                ->join('tbl_master_facility', 'tbl_location.mfl_code', '=', 'tbl_master_facility.code')
                ->select('tbl_refferal.ccc_no', 'tbl_refferal.referral_type', 'tbl_refferal.initiator_mfl_code', 'tbl_refferal.reffered_mfl_code', 'tbl_refferal.initiation_date')
                ->where('tbl_location.partner_id', Auth::user()->partner_id)
                ->get();
        }
        if (Auth::user()->role_id == '3') {
            $referral_details = Referral::join('tbl_location', 'tbl_refferal.initiator_mfl_code', '=', 'tbl_location.mfl_code')
                ->join('tbl_master_facility', 'tbl_location.mfl_code', '=', 'tbl_master_facility.code')
                ->select('tbl_refferal.ccc_no', 'tbl_refferal.referral_type', 'tbl_refferal.initiator_mfl_code', 'tbl_refferal.reffered_mfl_code', 'tbl_refferal.initiation_date')
                ->where('tbl_location.mfl_code', Auth::user()->mfl_code)
                ->get();
        }
        if (Auth::user()->role_id == '4') {
            $referral_details = Referral::join('tbl_location', 'tbl_refferal.initiator_mfl_code', '=', 'tbl_location.mfl_code')
                ->join('tbl_master_facility', 'tbl_location.mfl_code', '=', 'tbl_master_facility.code')
                ->join('tbl_partner', 'tbl_partner.partner_id', '=', 'tbl_location.partner_id')
                ->join('tbl_agency', 'tbl_agency.partner_id', '=', 'tbl_partner.partner_id')
                ->select('tbl_refferal.ccc_no', 'tbl_refferal.referral_type', 'tbl_refferal.initiator_mfl_code', 'tbl_refferal.reffered_mfl_code', 'tbl_refferal.initiation_date')
                ->where('tbl_partner.agency_id', Auth::user()->agency_id)
                ->get();
        }


        return view('referral.index', compact('referral_details'));
    }
}
