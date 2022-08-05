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

    Route::post('/add/user', ['uses' => 'App\Http\Controllers\UserController@adduser', 'as' => 'adduser']);
    Route::post('/edit/user', ['uses' => 'App\Http\Controllers\UserController@edituser', 'as' => 'edituser']);
    Route::get('/add/user/form', ['uses' => 'App\Http\Controllers\UserController@adduserform', 'as' => 'adduserform']);
    Route::get('/user', ['uses' => 'App\Http\Controllers\UserController@user', 'as' => 'user']);


// sessions


// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add/user', ['uses' => 'App\Http\Controllers\UserController@adduser', 'as' => 'adduser']);

Route::get('/patients', ['uses' => 'App\Http\Controllers\PatientController@index', 'as' => 'patients.list']);

Route::get('patients/create', ['uses' => 'App\Http\Controllers\PatientController@create', 'as' => 'patients.create']);

Route::get('patients/import', ['uses' => 'App\Http\Controllers\PatientController@import', 'as' => 'patients.import']);

Route::post('patients/upload', ['uses' => 'App\Http\Controllers\PatientController@upload', 'as' => 'patients.upload']);

Route::post('patients/store', ['uses' => 'App\Http\Controllers\PatientController@store', 'as' => 'patients.store']);

Route::get('/providers', ['uses' => 'App\Http\Controllers\ProviderController@index', 'as' => 'providers.list']);
    Route::get('/home', ['uses' => 'App\Http\Controllers\DashboardController@index', 'as' => 'home']);
// });

