<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Person;
use App\Models\Provider;
use App\Models\Facility;
use App\Imports\ProvidersImport;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;

class ProviderController extends Controller
{
    private function providersList()
    {
        return DB::table('tbl_person')
        ->join('tbl_provider', 'tbl_person.person_id', '=', 'tbl_provider.person_id')
        ->join('tbl_master_facility', 'tbl_provider.mfl_code', '=', 'tbl_master_facility.code')
        ->select('tbl_person.person_id','tbl_person.firstname', 'tbl_person.middlename', 'tbl_person.lastname', 'tbl_provider.msisdn','tbl_provider.mfl_code', 'tbl_master_facility.name as facility')
        ->get();
    }

    private function facilitiesList()
    {
        return Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
            ->select('tbl_master_facility.code', 'tbl_master_facility.name')
            ->orderBy('tbl_master_facility.name', 'ASC')
            ->get();
    }
    public function index()
    {
        $providers = $this->providersList();
        $facilities = $this->facilitiesList();
        return view('providers.providers', compact('providers','facilities'));
    }

    public function create(Request $request)
    {
        $facilities = $this->facilitiesList();

        return view('providers.addprovider', compact('facilities'));
    }

    public function store(Request $request)
    {

            // validate request
        $validated = $request->validate([
            'firstname' => ['required', 'string', 'max:150'],
            'middlename' => ['max:150'],
            'lastname' => ['required', 'string', 'max:150'],
            'facility' => ['required', 'string'],
        ]);

        //DB::transaction(function ($request) {

            //create a new person record
            $person =  Person::create([
                'firstname' => $request->get('firstname'),
                'middlename' => $request->get('middlename'),
                'lastname' => $request->get('lastname'),
            ]);

            //create provider record
           Provider::create([
                'person_id' => $person['person_id'],
                'msisdn' => $request->get('phone'),
                'mfl_code' => $request->get('facility'),
            ]);

            return redirect()->route('providers.list');

        //});
    }

    public function update(Request $request)
    {

        $person = Person::where('person_id', $request->person_id)
            ->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'middlename' => $request->middlename,
            ]);

        $provider = Provider::where('person_id', $request->person_id)
            ->update([
                'mfl_code' => $request->facility,
                'msisdn' => $request->phone,
            ]);

      if ($person) {
            Alert::success('Success', 'You\'ve Successfully Updated the Provider Record');
            return back();
        } elseif ($provider) {
            Alert::success('Success', 'You\'ve Successfully Updated the Provider Record');
            return back();
        } else {
            Alert::error('Failed', 'Update Failed');
            return back();
        }
    }

    public function destroy(Request $request)
    {
        $person = Person::destroy($request->person_id);
        if ($person) {
            Alert::success('Success', 'You\'ve Successfully Deleted the Provider Record');
            //return back();
        } else {
            Alert::error('Failed', 'Delete Failed');
            //return back();
        }
    }

    public function import(Request $request)
    {
        return view('providers.import');
    }

    public function upload(Request $request)
    {
        Excel::import(new ProvidersImport, $request->file);

        return redirect()->route('providers.list')->with('success', 'Providers List Imported Successfully');
    }
}
