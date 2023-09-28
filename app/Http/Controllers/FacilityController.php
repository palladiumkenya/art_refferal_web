<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\FacilityLocation;
use App\Models\Facility;
use App\Models\FacilityLocationDetail;
use App\Models\Partner;
use Auth;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {

        // $this->middleware('permission:facility-list|facility-create|facility-edit|facility-delete', ['only' => ['index', 'store']]);
        // $this->middleware('permission:facility-edit', ['only' => ['edit', 'update']]);
    }
    public function index()
    {
        if (Auth::user()->role_id == '1') {
            $facilities = Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
                ->leftJoin('tbl_partner', 'tbl_location.partner_id', '=', 'tbl_partner.partner_id')
                ->join('tbl_location_details', 'tbl_location.location_id', '=', 'tbl_location_details.location_id')
                ->select('tbl_master_facility.code', 'tbl_location_details.telephone', 'tbl_location_details.email', 'tbl_master_facility.name as facility', 'tbl_partner.partner_name', 'tbl_partner.partner_id')
                ->orderBy('tbl_master_facility.name', 'ASC')
                ->get();
        }
        if (Auth::user()->role_id == '2') {
            $facilities = Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
                ->leftJoin('tbl_partner', 'tbl_location.partner_id', '=', 'tbl_partner.partner_id')
                ->join('tbl_location_details', 'tbl_location.location_id', '=', 'tbl_location_details.location_id')
                ->select('tbl_master_facility.code', 'tbl_location_details.telephone', 'tbl_location_details.email', 'tbl_master_facility.name as facility', 'tbl_partner.partner_name', 'tbl_partner.partner_id')
                ->where('tbl_location.partner_id', Auth::user()->partner_id)
                ->orderBy('tbl_master_facility.name', 'ASC')
                ->get();
        }
        if (Auth::user()->role_id == '3') {
            $facilities = Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
                ->leftJoin('tbl_partner', 'tbl_location.partner_id', '=', 'tbl_partner.partner_id')
                ->join('tbl_location_details', 'tbl_location.location_id', '=', 'tbl_location_details.location_id')
                ->select('tbl_master_facility.code', 'tbl_location_details.telephone', 'tbl_location_details.email', 'tbl_master_facility.name as facility', 'tbl_partner.partner_name', 'tbl_partner.partner_id')
                ->where('tbl_location.mfl_code', Auth::user()->mfl_code)
                ->orderBy('tbl_master_facility.name', 'ASC')
                ->get();
        }
        if (Auth::user()->role_id == '4') {
            $facilities = Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
                ->leftJoin('tbl_partner', 'tbl_location.partner_id', '=', 'tbl_partner.partner_id')
                ->join('tbl_location_details', 'tbl_location.location_id', '=', 'tbl_location_details.location_id')
                ->select('tbl_master_facility.code', 'tbl_location_details.telephone', 'tbl_location_details.email', 'tbl_master_facility.name as facility', 'tbl_partner.partner_name', 'tbl_partner.partner_id')
                ->join('tbl_partner', 'tbl_partner.partner_id', '=', 'tbl_location.partner_id')
                ->join('tbl_agency', 'tbl_agency.partner_id', '=', 'tbl_partner.partner_id')
                ->where('tbl_partner.agency_id', Auth::user()->agency_id)
                ->orderBy('tbl_master_facility.name', 'ASC')
                ->get();
        }
        if (Auth::user()->role_id == '2') {
            $partners = Partner::all()->where('partner_id', Auth::user()->partner_id);
        } else {
            $partners = Partner::all();
        }

        return view('facilities.index', compact('facilities', 'partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facility = Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
            ->leftJoin('tbl_partner', 'tbl_location.partner_id', '=', 'tbl_partner.partner_id')
            ->select('tbl_master_facility.code', 'tbl_master_facility.name as facility', 'tbl_partner.partner_name')
            ->orderBy('tbl_master_facility.name', 'ASC')
            ->where('tbl_master_facility.code', $id)
            ->find($id);
        $partners = Partner::pluck('partner_name', 'partner_id')->toArray();

        return view('facilities.edit', compact('facility', 'partners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'partner' => 'required'
        ]);

        $facility = FacilityLocation::where('mfl_code', $request->id)
            ->update([
                'partner_id' => $request->partner,
            ]);
        $facility_contact = FacilityLocationDetail::join('tbl_location', 'tbl_location_details.location_id', '=', 'tbl_location.location_id')
            ->where('tbl_location.mfl_code', $request->id)
            ->update([
                'telephone' => $request->telephone,
                'email' => $request->email,
            ]);
        // dd($facility);
        if ($facility) {
            Alert::success('Success', 'Facility has been successfully mapped');
            return back();
        } elseif ($facility_contact) {
            Alert::success('Success', 'Facility Contact information has been successfully recorded');
            return back();
        } else {
            Alert::error('Failed', 'Save failed');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
