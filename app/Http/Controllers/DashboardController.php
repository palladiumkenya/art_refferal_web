<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\Referral;
use App\Models\ReferralData;
use App\Models\Patient;
use App\Models\Partner;
use App\Models\County;
use App\Models\Provider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
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
            $partners = Partner::all();
            $counties = County::all();
            $providers = Provider::all();
            $facilities = Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
                ->select('tbl_master_facility.code', 'tbl_master_facility.name')
                ->orderBy('tbl_master_facility.name', 'ASC')
                ->get();
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
            $facilities = Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
                ->select('tbl_master_facility.code', 'tbl_master_facility.name')
                ->orderBy('tbl_master_facility.name', 'ASC')
                ->get();
            $partners = Partner::all();
            $counties = County::all();
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
            $facilities = Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
                ->select('tbl_master_facility.code', 'tbl_master_facility.name')
                ->orderBy('tbl_master_facility.name', 'ASC')
                ->get();
            $partners = Partner::all();
            $counties = County::all();
        }

        return view('dashboard.dashboardv1', compact('transfers', 'patients', 'providers', 'partners', 'counties', 'facilities'));
    }

    public function data()
    {
        $data = [];

        if (Auth::user()->role_id == '1') {

            $facility_transfers = ReferralData::select(
                'facility',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out')
            )
                ->groupBy('facility');

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
        }
        if (Auth::user()->role_id == '2') {

            $facility_transfers = ReferralData::select(
                'facility',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out')
            )
                ->where('partner_id', Auth::user()->partner_id)
                ->groupBy('facility');

            $month_transfers = ReferralData::select(
                'month',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out')
            )
                ->where('partner_id', Auth::user()->partner_id)
                ->groupBy('month');

            $average_days = ReferralData::select(
                DB::raw('AVG(days) AS days'),
                'month',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out')
            )
                ->where('partner_id', Auth::user()->partner_id)
                ->groupBy('month');
        }
        if (Auth::user()->role_id == '3') {

            $facility_transfers = ReferralData::select(
                'facility',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out')
            )
                ->where('mfl_code', Auth::user()->mfl_code)
                ->groupBy('facility');

            $month_transfers = ReferralData::select(
                'month',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out')
            )
                ->where('mfl_code', Auth::user()->mfl_code)
                ->groupBy('month');

            $average_days = ReferralData::select(
                DB::raw('AVG(days) AS days'),
                'month',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out')
            )
                ->where('mfl_code', Auth::user()->mfl_code)
                ->groupBy('month');
        }

        $data["facility_transfers"] = $facility_transfers->get();
        $data["partner_transfers"] = $partner_transfers->get();
        $data["month_transfers"] = $month_transfers->get();
        $data["average_days"] = $average_days->get();

        return $data;
    }

    public function filter_data(Request $request)
    {
        $selected_partners = $request->partners;
        $selected_counties = $request->counties;
        $selected_facilites = $request->facilities;
        $selected_dates = $request->daterange;

        $dates = explode('-', $selected_dates);

        $unformatted_startdate = trim($dates[0]);
        $unformatted_enddate = trim($dates[1]);


        $startdate = Carbon::createFromFormat('m/d/Y', $unformatted_startdate)->format('Y-m-d');
        $enddate = Carbon::createFromFormat('m/d/Y', $unformatted_enddate)->format('Y-m-d');

        if (Auth::user()->role_id == '1') {
            $transfers = Referral::select(
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);

            $facility_transfers = ReferralData::select(
                'facility',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out')
            )
                ->groupBy('facility')->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);

            $partner_transfers = ReferralData::select(
                'partner',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out')
            )->groupBy('partner')->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);

            $month_transfers = ReferralData::select(
                'month',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out')
            )
                ->groupBy('month')->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);

            $average_days = ReferralData::select(
                DB::raw('AVG(days) AS days'),
                'month',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out')
            )
                ->groupBy('month')->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);

            if (!empty($selected_partners)) {
                $transfers = $transfers->whereIn('partner_id', $selected_partners);
                $facility_transfers = $facility_transfers->whereIn('partner_id', $selected_partners);
                $partner_transfers = $partner_transfers->whereIn('partner_id', $selected_partners);
                $month_transfers = $month_transfers->whereIn('partner_id', $selected_partners);
            }
            if (!empty($selected_facilites)) {
                $transfers = $transfers->whereIn('facility_mfl', $selected_facilites);
                $facility_transfers = $facility_transfers->whereIn('facility_mfl', $selected_facilites);
                $partner_transfers = $partner_transfers->whereIn('facility_mfl', $selected_facilites);
                $month_transfers = $month_transfers->whereIn('facility_mfl', $selected_facilites);
            }
            if (!empty($selected_counties)) {
                $transfers = $transfers->whereIn('county_id', $selected_counties);
                $facility_transfers = $facility_transfers->whereIn('county_id', $selected_counties);
                $partner_transfers = $partner_transfers->whereIn('county_id', $selected_counties);
                $month_transfers = $month_transfers->whereIn('county_id', $selected_counties);
            }

            $data["transfers"] = $transfers->get();
            $data["facility_transfers"] = $facility_transfers->get();
            $data["partner_transfers"] = $partner_transfers->get();
            $data["month_transfers"] = $month_transfers->get();
            $data["average_days"] = $average_days->get();

            return $data;
        }
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
