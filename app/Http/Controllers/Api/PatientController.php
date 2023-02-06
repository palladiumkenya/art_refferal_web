<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Helper;
use Illuminate\Support\Facades\Log;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Patient::all();
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

    public function register(Request $request)
    {
        $data = array();
        $patientData = $request->all();
        Log::debug($patientData);
        // $data['firstname'] = $patientData["MESSAGE_HEADER"]["SENDING_FACILITY"];
        // $data['middlename'] = $patientData["MESSAGE_HEADER"]["SENDING_FACILITY"];
        // $data['lastname'] = $patientData["MESSAGE_HEADER"]["SENDING_FACILITY"];
        // $data['mfl_code'] = $patientData["MESSAGE_HEADER"]["SENDING_FACILITY"];
        // $data['ccc_no'] = $patientData["MESSAGE_HEADER"]["SENDING_FACILITY"];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = array();
        $patientData = $request->all();

        foreach($patientData['patients'] as $key => $data){
            $person[] = Helper::PatientStore($data);
        }

        if(count($person)>0){
            return response()->json(['status' =>"success",'message'=>$patientData]);
        }else{
            return response()->json(['status' =>"fail",'message'=>'Failure while inserting patient records']);
        }


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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
