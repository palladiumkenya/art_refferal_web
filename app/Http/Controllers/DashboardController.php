<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboardv1');
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
