<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});


// Route::get('/', function () {
//     return view('dashboard.dashboardv1');
// });
// Route::view('/', 'starter')->name('starter');
Auth::routes();

// Route::middleware(['guest'])->group(function(){
// Route::post('/login', ['uses' => 'App\Http\Controllers\Auth\LoginController@login', 'as' => 'login']);
// });
// Route::group(['middleware' => 'auth'], function () {
Route::get('/logout', ['uses' => 'App\Http\Controllers\Auth\LoginController@logout', 'as' => 'logout']);

Route::get('/user', ['uses' => 'App\Http\Controllers\UserController@user', 'as' => 'user']);
Route::get('/add/user/form', ['uses' => 'App\Http\Controllers\UserController@adduserform', 'as' => 'adduserform']);
Route::post('/add/user', ['uses' => 'App\Http\Controllers\UserController@adduser', 'as' => 'adduser']);
Route::post('/edit/user', ['uses' => 'App\Http\Controllers\UserController@edituser', 'as' => 'edituser']);
Route::post('/reset/user', ['uses' => 'App\Http\Controllers\UserController@resetuser', 'as' => 'resetuser']);
Route::post('/delete/user', ['uses' => 'App\Http\Controllers\UserController@deleteuser', 'as' => 'deleteuser']);
Route::get('/user/forgot/password', ['uses' => 'App\Http\Controllers\UserController@forgot', 'as' => 'forgot']);
Route::get('/roles', ['uses' => 'App\Http\Controllers\UserController@role', 'as' => 'role']);
Route::get('/add/role/form', ['uses' => 'App\Http\Controllers\UserController@addroleform', 'as' => 'addroleform']);
Route::post('/add/role', ['uses' => 'App\Http\Controllers\UserController@addrole', 'as' => 'addrole']);


// sessions


// Auth::routes();

Route::get('/patients', ['uses' => 'App\Http\Controllers\PatientController@index', 'as' => 'patients.list']);

Route::get('patients/create', ['uses' => 'App\Http\Controllers\PatientController@create', 'as' => 'patients.create']);

Route::post('patients/store', ['uses' => 'App\Http\Controllers\PatientController@store', 'as' => 'patients.store']);

Route::get('/providers', ['uses' => 'App\Http\Controllers\ProviderController@index', 'as' => 'providers.list']);
Route::get('/home', ['uses' => 'App\Http\Controllers\DashboardController@index', 'as' => 'home']);
// });

