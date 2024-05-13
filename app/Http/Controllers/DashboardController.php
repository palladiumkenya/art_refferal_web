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
        ini_set("max_execution_time", "-1");
        ini_set("memory_limit", "-1");
        set_time_limit(0);

        if (Auth::user()->role_id == '1') {
            $transfers = Referral::select(
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->get();
            $patients = Patient::take(1000)->get();
            $partners = Partner::all();
            $counties = County::all();
            // $providers = Provider::all();
            $facilities = Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
                ->select('tbl_master_facility.code', 'tbl_master_facility.name')
                ->orderBy('tbl_master_facility.name', 'ASC')
                ->get();
        }
        if (Auth::user()->role_id == '2') {
            // $transfers = Referral::join('tbl_location', 'tbl_refferal.initiator_mfl_code', '=', 'tbl_location.mfl_code')
            //     ->select(
            //         DB::raw('SUM(CASE WHEN tbl_refferal.referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
            //         DB::raw('SUM(CASE WHEN tbl_refferal.referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
            //         DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            //     )
            //     ->where('tbl_location.partner_id', Auth::user()->partner_id)
            //     ->get();
            // $patients = Patient::join('tbl_patient_observations', 'tbl_patient.patient_id', '=', 'tbl_patient_observations.patient_id')
            //     ->join('tbl_location', 'tbl_patient_observations.mfl_code', '=', 'tbl_location.mfl_code')
            //     ->select('tbl_patient.ccc_no')
            //     ->where('tbl_location.partner_id', Auth::user()->partner_id)
            //     ->get();
            // $providers = Provider::join('tbl_location', 'tbl_provider.mfl_code', '=', 'tbl_location.mfl_code')
            //     ->select('tbl_provider.mfl_code')
            //     ->where('tbl_location.partner_id', Auth::user()->partner_id)
            //     ->get();
            $facilities = Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
                ->select('tbl_master_facility.code', 'tbl_master_facility.name')
                ->where('tbl_location.partner_id', Auth::user()->partner_id)
                ->orderBy('tbl_master_facility.name', 'ASC')
                ->get();
            $partners = Partner::all();
            $counties = County::join('tbl_master_facility', 'tbl_county.id', '=', 'tbl_master_facility.county_id')
                ->join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
                ->where('tbl_location.partner_id', Auth::user()->partner_id)
                ->select('tbl_county.id', 'tbl_county.name')->get();
             $counties = $counties->unique('name');

        }
        if (Auth::user()->role_id == '3') {
            // $transfers = Referral::select(
            //     DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
            //     DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
            //     DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            // )
            //     ->where('initiator_mfl_code', Auth::user()->mfl_code)
            //     ->groupBy('initiator_mfl_code')
            //     ->get();

            // $patients = Patient::join('tbl_patient_observations', 'tbl_patient.patient_id', '=', 'tbl_patient_observations.patient_id')
            //     ->select('tbl_patient.ccc_no')
            //     ->where('tbl_patient_observations.mfl_code', Auth::user()->mfl_code)
            //     ->get();
            // $providers = Provider::where('mfl_code', Auth::user()->mfl_code)
            //     ->get();
            $facilities = Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
                ->select('tbl_master_facility.code', 'tbl_master_facility.name')
                ->orderBy('tbl_master_facility.name', 'ASC')
                ->get();
            $partners = Partner::all();
            $counties = County::all();

        }

        // dd(Auth::user()->role_id);
        return view('dashboard.dashboardv1', compact('partners', 'counties', 'facilities'));
    }

    public function data()
    {
        $data = [];

        if (Auth::user()->role_id == '1') {
            $transfers = Referral::select(
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            );
            $patients = Patient::count();

            $partner_transfers = ReferralData::select(
                'partner',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )->groupBy('partner');
            $county_transfers = ReferralData::select(
                'county',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )->groupBy('county');

            $month_transfers = ReferralData::select(
                'month',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->groupBy('month');

            $average_days = ReferralData::select(
                DB::raw('AVG(days) AS days'),
                'month',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->groupBy('month');

            $data["transfers"] = $transfers->get();
            $data["patients"] = $patients;
            $data["partner_transfers"] = $partner_transfers->get();
            $data["month_transfers"] = $month_transfers->get();
            $data["average_days"] = $average_days->get();
            $data["county_transfers"] = $county_transfers->get();
        }
        if (Auth::user()->role_id == '2') {

            $transfers = Referral::join('tbl_location', 'tbl_refferal.initiator_mfl_code', '=', 'tbl_location.mfl_code')
                ->select(
                    DB::raw('SUM(CASE WHEN tbl_refferal.referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                    DB::raw('SUM(CASE WHEN tbl_refferal.referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                    DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
                )
                ->where('tbl_location.partner_id', Auth::user()->partner_id);
            $patients = Patient::join('tbl_patient_observations', 'tbl_patient.patient_id', '=', 'tbl_patient_observations.patient_id')
                ->join('tbl_location', 'tbl_patient_observations.mfl_code', '=', 'tbl_location.mfl_code')
                ->where('tbl_location.partner_id', Auth::user()->partner_id)->count();

            $facility_transfers = ReferralData::select(
                'initiator_facility',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->where('partner_id', Auth::user()->partner_id)
                ->groupBy('initiator_facility');

            $month_transfers = ReferralData::select(
                'month',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->where('partner_id', Auth::user()->partner_id)
                ->groupBy('month');

            $average_days = ReferralData::select(
                DB::raw('AVG(days) AS days'),
                'month',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->where('partner_id', Auth::user()->partner_id)
                ->groupBy('month');

            $data["transfers"] = $transfers->get();
            $data["patients"] = $patients;
            $data["facility_transfers"] = $facility_transfers->get();
            $data["month_transfers"] = $month_transfers->get();
            $data["average_days"] = $average_days->get();
        }
        if (Auth::user()->role_id == '3') {

            $transfers = Referral::select(
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->where('initiator_mfl_code', Auth::user()->mfl_code);
            $patients = Patient::join('tbl_patient_observations', 'tbl_patient.patient_id', '=', 'tbl_patient_observations.patient_id')
                ->where('tbl_patient_observations.mfl_code', Auth::user()->mfl_code)->count();
            $facility_transfers = ReferralData::select(
                'initiator_facility',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->where('initiator_mfl_code', Auth::user()->mfl_code)
                ->groupBy('initiator_facility');

            $month_transfers = ReferralData::select(
                'month',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->where('initiator_mfl_code', Auth::user()->mfl_code)
                ->groupBy('month');

            $average_days = ReferralData::select(
                DB::raw('AVG(days) AS days'),
                'month',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->where('initiator_mfl_code', Auth::user()->mfl_code)
                ->groupBy('month');
            $clients = ReferralData::whereIn('ccc_no', function ($query) {
                $query->select('ccc_no')
                    ->from('vw_referral')
                    ->groupBy('ccc_no')
                    ->havingRaw('COUNT(ccc_no) > 1');
            })
                ->select('*')
                ->whereRaw('refferal_id = (SELECT MAX(refferal_id) FROM vw_referral AS t2 WHERE t2.ccc_no = vw_referral.ccc_no)');



            $data["transfers"] = $transfers->get();
            $data["patients"] = $patients;
            $data["facility_transfers"] = $facility_transfers->get();
            $data["month_transfers"] = $month_transfers->get();
            $data["average_days"] = $average_days->get();
            $data["clients"] = $clients->get();
        }



        return $data;
    }

    public function filter_data(Request $request)
    {
        $data = [];

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
            $transfers = ReferralData::select(
                DB::raw('IFNULL(SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END), 0) AS transfer_in'),
                DB::raw('IFNULL(SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END), 0) AS transfer_out'),
                DB::raw('IFNULL(SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END), 0) AS transit')
            )
                ->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);

            $patients = Patient::select('tbl_patient.ccc_no')->whereDate('tbl_patient.created_at', '>=', $startdate)->whereDate('tbl_patient.created_at', '<=', $enddate)->count();

            $facility_transfers = ReferralData::select(
                'initiator_mfl_code',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->groupBy('initiator_mfl_code')->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);

            $partner_transfers = ReferralData::select(
                'partner',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )->groupBy('partner')->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);
            $county_transfers = ReferralData::select(
                'county',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )->groupBy('county')->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);

            $month_transfers = ReferralData::select(
                'month',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->groupBy('month')->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);

            $average_days = ReferralData::select(
                DB::raw('AVG(days) AS days'),
                'month',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->groupBy('month')->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);
        }
        if (Auth::user()->role_id == '2') {
            $transfers = ReferralData::select(
                DB::raw('IFNULL(SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END), 0) AS transfer_in'),
                DB::raw('IFNULL(SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END), 0) AS transfer_out'),
                DB::raw('IFNULL(SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END), 0) AS transit')
            )
                ->where('partner_id', Auth::user()->partner_id)
                ->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);

            $patients = Patient::join('tbl_patient_observations', 'tbl_patient.patient_id', '=', 'tbl_patient_observations.patient_id')
                ->join('tbl_location', 'tbl_patient_observations.mfl_code', '=', 'tbl_location.mfl_code')
                ->select('tbl_patient.ccc_no')
                ->where('tbl_location.partner_id', Auth::user()->partner_id)
                ->whereDate('tbl_patient.created_at', '>=', $startdate)->whereDate('tbl_patient.created_at', '<=', $enddate)->count();

            $facility_transfers = ReferralData::select(
                'initiator_mfl_code',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->where('partner_id', Auth::user()->partner_id)
                ->groupBy('initiator_mfl_code')->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);

            $partner_transfers = ReferralData::select(
                'partner',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->where('partner_id', Auth::user()->partner_id)
                ->groupBy('partner')->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);

            $month_transfers = ReferralData::select(
                'month',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->where('partner_id', Auth::user()->partner_id)
                ->groupBy('month')->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);

            $average_days = ReferralData::select(
                DB::raw('AVG(days) AS days'),
                'month',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->where('partner_id', Auth::user()->partner_id)
                ->groupBy('month')->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);
        }
        if (Auth::user()->role_id == '3') {
            $transfers = ReferralData::select(
                DB::raw('IFNULL(SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END), 0) AS transfer_in'),
                DB::raw('IFNULL(SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END), 0) AS transfer_out'),
                DB::raw('IFNULL(SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END), 0) AS transit')
            )
                ->where('initiator_mfl_code', Auth::user()->mfl_code)
                ->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);

            $patients = Patient::join('tbl_patient_observations', 'tbl_patient.patient_id', '=', 'tbl_patient_observations.patient_id')
                ->select('tbl_patient.ccc_no')
                ->where('tbl_patient_observations.mfl_code', Auth::user()->mfl_code)
                ->whereDate('tbl_patient.created_at', '>=', $startdate)->whereDate('tbl_patient.created_at', '<=', $enddate)->count();

            $facility_transfers = ReferralData::select(
                'initiator_mfl_code',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->where('initiator_mfl_code', Auth::user()->mfl_code)
                ->groupBy('initiator_mfl_code')->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);

            $partner_transfers = ReferralData::select(
                'partner',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->where('initiator_mfl_code', Auth::user()->mfl_code)
                ->groupBy('partner')->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);

            $month_transfers = ReferralData::select(
                'month',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )->where('initiator_mfl_code', Auth::user()->mfl_code)
                ->groupBy('month')->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);

            $average_days = ReferralData::select(
                DB::raw('AVG(days) AS days'),
                'month',
                DB::raw('SUM(CASE WHEN referral_type = "Silent" THEN 1 ELSE 0 END) AS transfer_in'),
                DB::raw('SUM(CASE WHEN referral_type = "Normal" THEN 1 ELSE 0 END) AS transfer_out'),
                DB::raw('SUM(CASE WHEN referral_type = "Transit" THEN 1 ELSE 0 END) AS transit')
            )
                ->where('initiator_mfl_code', Auth::user()->mfl_code)
                ->groupBy('month')->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);
            $clients = ReferralData::whereIn('ccc_no', function ($query) {
                $query->select('ccc_no')
                    ->from('vw_referral')
                    ->groupBy('ccc_no')
                    ->havingRaw('COUNT(ccc_no) > 1');
            })
                ->select('*')
                ->whereRaw('refferal_id = (SELECT MAX(refferal_id) FROM vw_referral AS t2 WHERE t2.ccc_no = vw_referral.ccc_no)')
                ->whereDate('initiation_date', '>=', $startdate)->whereDate('initiation_date', '<=', $enddate);
        }
        if (!empty($selected_partners)) {
            $transfers = $transfers->where('partner_id', $selected_partners);
            $patients = $patients->join('tbl_patient_observations', 'tbl_patient.patient_id', '=', 'tbl_patient_observations.patient_id')
                ->join('tbl_location', 'tbl_patient_observations.mfl_code', '=', 'tbl_location.mfl_code')->where('tbl_location.partner_id', $selected_partners)->count();
            $facility_transfers = $facility_transfers->where('partner_id', $selected_partners);
            $partner_transfers = $partner_transfers->where('partner_id', $selected_partners);
            $month_transfers = $month_transfers->where('partner_id', $selected_partners);
            $county_transfers = $county_transfers->where('partner_id', $selected_partners);
        }
        if (!empty($selected_facilites)) {
            $transfers = $transfers->where('initiator_mfl_code', $selected_facilites);
            $patients = $patients->join('tbl_patient_observations', 'tbl_patient.patient_id', '=', 'tbl_patient_observations.patient_id')->where('tbl_patient_observations.mfl_code', $selected_facilites)->count();
            $facility_transfers = $facility_transfers->where('initiator_mfl_code', $selected_facilites);
            $partner_transfers = $partner_transfers->where('initiator_mfl_code', $selected_facilites);
            $month_transfers = $month_transfers->where('initiator_mfl_code', $selected_facilites);
            $county_transfers = $county_transfers->where('initiator_mfl_code', $selected_facilites);
        }
        if (!empty($selected_counties)) {
            $transfers = $transfers->where('county_id', $selected_counties);
            $patients = $patients->join('tbl_patient_observations', 'tbl_patient.patient_id', '=', 'tbl_patient_observations.patient_id')
                ->join('tbl_location', 'tbl_patient_observations.mfl_code', '=', 'tbl_location.mfl_code')
                ->join('tbl_master_facility', 'tbl_location.mfl_code', '=', 'tbl_master_facility.code')->where('tbl_master_facility.county_id', $selected_counties)->count();
            $facility_transfers = $facility_transfers->where('county_id', $selected_counties);
            $partner_transfers = $partner_transfers->where('county_id', $selected_counties);
            $month_transfers = $month_transfers->where('county_id', $selected_counties);
            $county_transfers = $county_transfers->where('county_id', $selected_counties);
        }

        $data["transfers"] = $transfers->get();
        $data["patients"] = $patients;
        $data["facility_transfers"] = $facility_transfers->get();
        $data["partner_transfers"] = $partner_transfers->get();
        $data["month_transfers"] = $month_transfers->get();
        $data["average_days"] = $average_days->get();
        if (Auth::user()->role_id == '3') {
            $data["clients"] = $clients->get();
        }
        if (Auth::user()->role_id == '1') {
            $data["county_transfers"] = $county_transfers->get();
        }

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
