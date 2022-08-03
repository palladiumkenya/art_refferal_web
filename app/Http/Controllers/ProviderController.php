<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Person;
use App\Models\Provider;
use App\Models\Facility;
use Exception;

class ProviderController extends Controller
{
    private function providersList()
    {
        return DB::table('tbl_person')
        ->join('tbl_provider', 'tbl_person.person_id', '=', 'tbl_provider.person_id')
        ->join('tbl_master_facility', 'tbl_provider.mfl_code', '=', 'tbl_master_facility.code')
        ->select('tbl_person.person_id','tbl_person.firstname', 'tbl_person.middlename', 'tbl_person.lastname', 'tbl_provider.msisdn', 'tbl_master_facility.name as facility')
        ->get();
    }
    public function index()
    {
        return view('providers.providers', ['providers' =>  $this->providersList()]);
    }
}
