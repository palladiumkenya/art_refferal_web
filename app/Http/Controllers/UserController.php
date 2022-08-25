<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Person;
use App\Models\Provider;
use App\Models\Facility;
use Spatie\Permission\Models\Role;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use App\Models\Permission;
use App\Models\Partner;
use App\Models\Agency;


class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }
    public function adduserform()
    {
        $facilities = Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
            ->select('tbl_master_facility.code', 'tbl_master_facility.name')
            ->orderBy('tbl_master_facility.name', 'ASC')
            ->get();
        $partners = Partner::all();
        $agencies = Agency::all();
        $roles = Role::all();
        return view('users.adduser', compact('facilities', 'partners', 'agencies', 'roles'));
    }

    public function create()
    {
        $roles = Role::all();
        $facilities = Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
            ->select('tbl_master_facility.code', 'tbl_master_facility.name')
            ->orderBy('tbl_master_facility.name', 'ASC')
            ->get();
        $partners = Partner::all();
        $agencies = Agency::all();

        return view('users.create', compact('roles', 'facilities', 'partners', 'agencies'));
    }
    public function adduser(Request $request)
    {

        $request->validate([
            'firstname' => ['required', 'string', 'max:150'],
            'middlename' => ['max:150'],
            'lastname' => ['required', 'string', 'max:150'],
            'email' => 'required|string|email|max:255',
            'role' => ['required', 'numeric'],

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
            'name' => $request->get('lastname'),
            'partner_id' => $request->get('partner'),
            'role_id' => $request->get('role'),
            'mfl_code' => $request->get('mflcode'),
            'agency_id' => $request->get('agency'),
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
        $user = User::join('tbl_provider', 'users.person_id', '=', 'tbl_provider.person_id')
            ->join('tbl_person', 'users.person_id', '=', 'tbl_person.person_id')
            ->join('roles', 'roles.id', '=', 'users.role_id')
            ->select(
                'tbl_provider.msisdn as phone',
                'tbl_person.firstname',
                'tbl_person.middlename',
                'tbl_person.lastname',
                'users.id as id',
                'users.person_id as person_id',
                'users.email',
                'roles.name as role',
                'users.role_id',
                'users.agency_id',
                'users.partner_id',
                'users.mfl_code'
            )
            ->where('users.is_active', '=', '1')
            ->get();

        $facilities = Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
            ->select('tbl_master_facility.code', 'tbl_master_facility.name')
            ->orderBy('tbl_master_facility.name', 'ASC')
            ->get();
        $partners = Partner::all();
        $agencies = Agency::all();
        $roles = Role::all();

        return view('users.user', compact('user', 'facilities', 'roles', 'agencies', 'partners'));
    }
    public function edituser(Request $request)
    {


        $user = User::where('person_id', $request->person_id)
            ->update([
                'email' => $request->email,
                'username' => $request->phone,
                'name' => $request->lastname,
                'partner_id' => $request->partner,
                'role_id' => $request->role,
                'mfl_code' => $request->mflcode,
                'agency_id' => $request->agency,
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
        if ($role) {
            Alert::success('Success', 'You\'ve Successfully Added Role');
            return back();
        } else {
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
        if ($role) {
            Alert::success('Success', 'You\'ve Successfully Updated Role');
            return back();
        } else {
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
        if ($permission) {
            Alert::success('Success', 'You\'ve Successfully Added Permisson');
            return back();
        } else {
            Alert::error('Failed', 'Save failed');
            return back();
        }
    }
}
