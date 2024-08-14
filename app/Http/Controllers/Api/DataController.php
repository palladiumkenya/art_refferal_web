<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Partner;
use App\Models\Patient;
use App\Models\Facility;
use App\Models\FacilityLocation;
use App\Models\FacilityLocationDetail;
use App\Models\LocationType;
use App\Models\FacilitySearchRating;

class DataController extends Controller
{
    //get art directory details
    public function directory(Request $request)
    {
        $where = [];
        $orwhere = [];


        $code = $request->route('code');
        $name = $request->route('name');

        if ($code) $where[] = ['tbl_master_facility.code', 'like', "%$code%"];
        if ($name) $orwhere[] = ['tbl_master_facility.name', 'like', "%$name%"];

        $facility = Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
            ->leftJoin('tbl_location_details', 'tbl_location.location_id', '=', 'tbl_location_details.location_id')
            ->select('tbl_master_facility.code', 'tbl_master_facility.name', DB::raw("IFNULL(tbl_master_facility.facility_type,'') as facility_type"), DB::raw("IFNULL(tbl_location_details.telephone,'') as telephone"))
            ->where($where)->orWhere($orwhere)
            ->orderBy('tbl_master_facility.name', 'asc')
            ->distinct()
            ->get();

        return response()->json(['status' => "success", 'message' => $facility]);
    }

    public function patient_regimen(Request $request)
    {
        $ccc_no = $request->route('cccno');

        $patient = Person::join('tbl_patient', 'tbl_person.person_id', '=', 'tbl_patient.person_id')
            ->join('tbl_patient_observations', 'tbl_patient.patient_id', '=', 'tbl_patient_observations.patient_id')
            ->where('tbl_patient.ccc_no', $ccc_no)
            ->select('tbl_person.firstname', 'tbl_person.middlename', 'tbl_person.lastname', 'tbl_patient.ccc_no', DB::raw("IFNULL(tbl_patient_observations.regimen,'') as regimen"))
            ->get();

        return response()->json(['status' => "success", 'message' => $patient]);
    }

    public function facility_directory(Request $request, $code = null, $name = null)
    {
        $code = $request->input('code');
        $name = $request->input('name');

        $directory = DB::select('CALL sp_facility_directory(?, ?)', [$code, $name]);

        return response()->json(['status' => "success", 'message' => $directory]);
    }

    public function facility_directory_rating(Request $request)
    {
        $facilityRankingData = $request->all();

        $mflcode = $facilityRankingData['mflcode'];
        $rating = $facilityRankingData['rating'];
        $comment = $facilityRankingData['comment'];

        // Save the rating
        FacilitySearchRating::create([
            'mfl_code' => $mflcode,
            'rating' => $rating,
            'comment' => $comment,
        ]);

        return response()->json(['status' => "success", 'message' => $facilityRankingData]);
    }

    public function facility_update(Request $request)
    {
        $facilityData = $request->all();

        $mflcode = $facilityData['mflcode'];
        $ccc_phone = $facilityData['ccc_phone'];
        $pmtct_phone = $facilityData['pmtct_phone'];

        //create the facility location
        $facility_location = FacilityLocation::updateOrCreate(
            ['mfl_code' => $mflcode],
            ['is_active' => 1]
        );

        // $phone_numbers = [
        //                    ["location_id" => $facility_location['location_id'],"location_type" => "1","telephone" => $ccc_phone],
        //                    ["location_id" => $facility_location['location_id'],"location_type" => "2","telephone" => $pmtct_phone]
        //                 ];

        //capture the location details
        FacilityLocationDetail::updateOrCreate(
            ['location_id' => $facility_location['location_id'],'location_type' => 1],
            ['telephone' => "$ccc_phone"]
        );

        FacilityLocationDetail::updateOrCreate(
            ['location_id' => $facility_location['location_id'],'location_type' => 2],
            ['telephone' => "$pmtct_phone"]
        );

        // FacilityLocationDetail::upsert($phone_numbers, ['location_id', 'location_type','telephone'], ['telephone']);

        return response()->json(['status' => "success", 'message' => 'Location details captured successfully']);
    }
}
