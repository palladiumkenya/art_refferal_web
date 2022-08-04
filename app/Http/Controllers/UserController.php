<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Person;
use App\Models\Provider;
use App\Models\Facility;
use Exception;

class UserController extends Controller
{
    public function adduserform()
    {
        $facilities = Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
            ->select('tbl_master_facility.code', 'tbl_master_facility.name')
            ->orderBy('tbl_master_facility.name', 'ASC')
            ->get();
        return view('users.adduser', compact('facilities'));
    }
    public function adduser(Request $request)
    {

        try {

            $person = new Person;
            $person->firstname = $request->firstname;
            $person->lastname = $request->lastname;
            $person->middlename = $request->middlename;
            $person->created_date = date('Y-m-d H:i:s');
            $person->updated_date = date('Y-m-d H:i:s');
            $person->save();

            $pid = $person->person_id;

            $user = new User;
            $user->password = bcrypt($request->phone);
            $user->person_id =  $pid;
            $user->email = $request->email;
            $user->username = $request->phone;
            $user->created_date = date('Y-m-d H:i:s');
            $user->updated_date = date('Y-m-d H:i:s');
            $user->save();

            $provider = new Provider;
            $provider->mfl_code = $request->mflcode;
            $provider->msisdn = $request->phone;
            $provider->person_id =  $pid;
            $person->created_date = date('Y-m-d H:i:s');
            $person->updated_date = date('Y-m-d H:i:s');
            $provider->save();

            //  print_r($provider);

            return redirect()->route('user');
        } catch (Exception $e) {
        }
    }
    public function user()
    {
        $user = User::join('tbl_provider', 'tbl_user.person_id', '=', 'tbl_provider.person_id')
            ->join('tbl_person', 'tbl_user.person_id', '=', 'tbl_person.person_id')
            ->join('tbl_master_facility', 'tbl_provider.mfl_code', '=', 'tbl_master_facility.code')
            ->select(
                'tbl_provider.msisdn as phone',
                'tbl_person.firstname',
                'tbl_person.middlename',
                'tbl_person.lastname',
                'tbl_master_facility.code',
                'tbl_user.user_id as id',
                'tbl_user.email',
                'tbl_master_facility.name as facility'
            )
            ->where('tbl_user.is_active', '=', '1')
            ->get();

        $facilities = Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
            ->select('tbl_master_facility.code', 'tbl_master_facility.name')
            ->orderBy('tbl_master_facility.name', 'ASC')
            ->get();

        return view('users.user', compact('user', 'facilities'));
    }
    public function edituser(Request $request)
    {
        try {
            $user = User::find($request->id);

            $pid = $user->person_id;

            $person = Person::find($pid);
            $person->firstname = $request->firstname;
            $person->lastname = $request->lastname;
            $person->updated_date = date('Y-m-d H:i:s');
            $person->save();

            $user = new User;
            $user->email = $request->email;
            $user->username = $request->phone;
            $person->updated_date = date('Y-m-d H:i:s');
            $user->save();

            $provider = Provider::find($pid);
            $provider->mfl_code = $request->mflcode;
            $provider->msisdn = $request->phone;
            $person->updated_date = date('Y-m-d H:i:s');
            $provider->save();
        } catch (Exception $e) {
        }
    }
    public function resetuser(Request $request)
    {
        try {
            $user = User::find($request->id);
            $user->password = bcrypt($user->username);
            $user->updated_at = date('Y-m-d H:i:s');
            //  $user->updated_by = Auth::user()->id;

            if ($user->save()) {
                return redirect('user')->with('status', 'User has been reset successfull');
            } else {
                Session::flash('statuscode', 'error');
                return back();
            }
        } catch (Exception $e) {
            return back();
        }
    }
    public function deleteuser(Request $request)
    {
        try {
            $user = User::where('id', $request->id)
                ->update([
                    'is_active' => '0',
                    'updated_date' =>  date('Y-m-d H:i:s'),
                ]);
        } catch (Exception $e) {
        }
    }
}
