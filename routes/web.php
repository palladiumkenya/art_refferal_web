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
    return view('dashboard.dashboardv1');
});
Route::get('/table', function () {
    return view('datatables.buttons');
});
// Route::view('/', 'starter')->name('starter');


// sessions
Route::view('sessions/signIn', 'sessions.signIn')->name('signIn');
Route::view('sessions/signUp', 'sessions.signUp')->name('signUp');
Route::view('sessions/forgot', 'sessions.forgot')->name('forgot');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add/user', ['uses' => 'App\Http\Controllers\UserController@adduser', 'as' => 'adduser']);

Route::get('/patients', ['uses' => 'App\Http\Controllers\PatientController@index', 'as' => 'patients.list']);

Route::get('patients/create', ['uses' => 'App\Http\Controllers\PatientController@create', 'as' => 'patients.create']);

Route::post('patients/store', ['uses' => 'App\Http\Controllers\PatientController@store', 'as' => 'patients.store']);

Route::get('/providers', ['uses' => 'App\Http\Controllers\ProviderController@index', 'as' => 'providers.list']);
