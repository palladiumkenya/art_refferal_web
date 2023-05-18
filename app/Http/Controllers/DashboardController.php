<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\Referral;
use App\Models\ReferralData;
use App\Models\Patient;
use App\Models\Provider;
use Illuminate\Support\Facades\DB;
use Auth;


class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role_id == '1') {
            $transfers = Referral::select(
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->get();
            $patients = Patient::all();
            $providers = Provider::all();
        }
        if (Auth::user()->role_id == '2') {
            $transfers = Referral::join('tbl_location', 'tbl_refferal.initiator_mfl_code', '=', 'tbl_location.mfl_code')
                ->select(
                    DB::raw('SUM(CASE WHEN tbl_refferal.referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                    DB::raw('SUM(CASE WHEN tbl_refferal.referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                    DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
                )
                ->where('tbl_location.partner_id', Auth::user()->partner_id)
                ->get();
            $patients = Patient::join('tbl_patient_observations', 'tbl_patient.patient_id', '=', 'tbl_patient_observations.patient_id')
                ->join('tbl_location', 'tbl_patient_observations.mfl_code', '=', 'tbl_location.mfl_code')
                ->select('tbl_patient.ccc_no')
                ->where('tbl_location.partner_id', Auth::user()->partner_id)
                ->get();
            $providers = Provider::join('tbl_location', 'tbl_provider.mfl_code', '=', 'tbl_location.mfl_code')
                ->select('tbl_provider.mfl_code')
                ->where('tbl_location.partner_id', Auth::user()->partner_id)
                ->get();
        }
        if (Auth::user()->role_id == '3') {
            $transfers = Referral::select(
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->where('initiator_mfl_code', Auth::user()->mfl_code)
                ->groupBy('initiator_mfl_code')
                ->get();

            $patients = Patient::join('tbl_patient_observations', 'tbl_patient.patient_id', '=', 'tbl_patient_observations.patient_id')
                ->select('tbl_patient.ccc_no')
                ->where('tbl_patient_observations.mfl_code', Auth::user()->mfl_code)
                ->get();
            $providers = Provider::where('mfl_code', Auth::user()->mfl_code)
                ->get();
        }

        return view('dashboard.dashboardv1', compact('transfers', 'patients', 'providers'));
    }

    public function data()
    {
        $data = [];

        $facility_transfers = ReferralData::select(
            'facility',
            DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
            DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out')
        )->groupBy('facility');

        $partner_transfers = ReferralData::select(
            'partner',
            DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
            DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out')
        )->groupBy('partner');

        $month_transfers = ReferralData::select(
            'month',
            DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
            DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out')
        )
            ->groupBy('month');

        $average_days = ReferralData::select(
            DB::raw('AVG(days) AS days'),
            'month',
            DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
            DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out')
        )
            ->groupBy('month');

        $data["facility_transfers"] = $facility_transfers->get();
        $data["partner_transfers"] = $partner_transfers->get();
        $data["month_transfers"] = $month_transfers->get();
        $data["average_days"] = $average_days->get();

        return $data;
    }

    public function facilities()
    {
        $facilities = Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
            ->leftJoin('tbl_partner', 'tbl_location.partner_id', '=', 'tbl_partner.partner_id')
            ->select('tbl_master_facility.code', 'tbl_master_facility.name as facility')
            ->orderBy('tbl_master_facility.name', 'ASC')
            ->get();

        return view('facilities.index', compact('facilities'));
    }
}
