<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {


        $credentials = $request->validate([
            'msisdn' => 'required',
            'password' => 'required'
        ]);

        $user = User::join('tbl_provider', 'tbl_user.person_id', '=', 'tbl_provider.person_id')
            ->where('tbl_provider.msisdn', '=', $request->phone)->first();


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('add/user/form');
        } else {
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }
    }
}
