<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Person;
use App\Models\Provider;
use App\Models\Facility;
use App\Models\Role;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use App\Models\Permission;

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


        $request->validate([
            'firstname' => ['required', 'string', 'max:150'],
            'middlename' => ['max:150'],
            'lastname' => ['required', 'string', 'max:150'],
            'email' => 'required|string|email|max:255',
            'mflcode' => ['required', 'numeric'],

        ]);
        $person = Person::create([
            'firstname' => $request->get('firstname'),
            'middlename' => $request->get('middlename'),
            'lastname' => $request->get('lastname'),
        ]);

        $pid = $person['person_id'];

        $user = User::create([
            'password' => bcrypt($request->get('phone')),
            'person_id' => $pid,
            'email' => $request->get('email'),
            'username' => $request->get('phone'),
        ]);

        $provider = Provider::create([
            'mfl_code' => $request->get('mflcode'),
            'msisdn' => $request->get('phone'),
            'person_id' => $pid,
        ]);

        if ($person && $user && $provider) {
            Alert::success('Success', 'You\'ve Successfully Registered User');
            return back();
            //return redirect('users/user');
        } else {
            Alert::error('Failed', 'Registration failed');
            return back();
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
                'tbl_user.person_id as person_id',
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


        $user = User::where('person_id', $request->person_id)
            ->update([
                'email' => $request->email,
                'username' => $request->phone,
            ]);
        $person = Person::where('person_id', $request->person_id)
            ->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'middlename' => $request->middlename,
            ]);

        $provider = Provider::where('person_id', $request->person_id)
            ->update([
                'mfl_code' => $request->mflcode,
                'msisdn' => $request->phone,
            ]);
        if ($user) {
            Alert::success('Success', 'You\'ve Successfully Updated User');
            return back();
        } elseif ($person) {
            Alert::success('Success', 'You\'ve Successfully Updated User');
            return back();
        } elseif ($provider) {
            Alert::success('Success', 'You\'ve Successfully Updated User');
            return back();
        } else {
            Alert::error('Failed', 'Update failed');
            return back();
        }
    }
    public function resetuser(Request $request)
    {

        $user = User::where('person_id', $request->person_id);
        $user->password = bcrypt($user->username);

        if ($user->save()) {
            return redirect('user')->with('status', 'User has been reset successfull');
        } else {
            Alert::error('Failed', 'Update failed');
            return back();
        }
    }
    public function deleteuser(Request $request)
    {
        $user = User::where('person_id', $request->person_id)
            ->update([
                'is_active' => '0',
            ]);
        if ($user) {
            Alert::success('Success', 'You\'ve Successfully Disabled User');
            return back();
        } else {
            Alert::error('Failed', 'Disabled failed');
            return back();
        }
    }

    public function forgot()
    {
        return view('auth.forgot');
    }
    public function roles()
    {
        $permissions = Permission::all();
        $roles = Role::select('*')->where('status', '=', 'Active')->get();

        return view('roles.role', compact('roles', 'permissions'));
    }
    public function addrole(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:150'],
        ]);

        $role = Role::create([
            'name' => $request->name,
        ]);
        if($role) {
            Alert::success('Success', 'You\'ve Successfully Added Role');
            return back();
        }else{
            Alert::error('Failed', 'Save failed');
            return back();
        }
    }
    public function editrole(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:150'],
        ]);

        $role = Role::where('id', $request->id)
        ->update([
            'name' => $request->name,
        ]);
        if($role) {
            Alert::success('Success', 'You\'ve Successfully Updated Role');
            return back();
        }else{
            Alert::error('Failed', 'Update failed');
            return back();
        }
    }
    public function permission()
    {
        $permissions = Permission::all();
        return view('permissions.permission', compact('permissions'));
    }
    public function addpermission(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:150'],
        ]);

        $permission = Permission::create([
            'name' => $request->name,
        ]);
        if($permission) {
            Alert::success('Success', 'You\'ve Successfully Added Permisson');
            return back();
        }else{
            Alert::error('Failed', 'Save failed');
            return back();
        }
    }
}
