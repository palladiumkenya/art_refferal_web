<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;


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

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);

    Route::get('/logout', ['uses' => 'App\Http\Controllers\Auth\LoginController@logout', 'as' => 'logout']);

    Route::get('/user', ['uses' => 'App\Http\Controllers\UserController@user', 'as' => 'user']);
    Route::get('/add/user/form', ['uses' => 'App\Http\Controllers\UserController@adduserform', 'as' => 'adduserform']);
    Route::post('/add/user', ['uses' => 'App\Http\Controllers\UserController@adduser', 'as' => 'adduser']);
    Route::post('/edit/user', ['uses' => 'App\Http\Controllers\UserController@edituser', 'as' => 'edituser']);
    Route::post('/reset/user', ['uses' => 'App\Http\Controllers\UserController@resetuser', 'as' => 'resetuser']);
    Route::post('/delete/user', ['uses' => 'App\Http\Controllers\UserController@deleteuser', 'as' => 'deleteuser']);
    Route::get('/user/forgot/password', ['uses' => 'App\Http\Controllers\UserController@forgot', 'as' => 'forgot']);
    //Route::get('/roles', ['uses' => 'App\Http\Controllers\RoleController@index', 'as' => 'role']);
    //Route::get('/add/role/form', ['uses' => 'App\Http\Controllers\UserController@addroleform', 'as' => 'addroleform']);
    //Route::post('/add/role', ['uses' => 'App\Http\Controllers\UserController@addrole', 'as' => 'addrole']);
    //Route::post('/edit/role', ['uses' => 'App\Http\Controllers\RoleController@edit', 'as' => 'roles.edit']);


    //Route::get('/permissions', ['uses' => 'App\Http\Controllers\UserController@permission', 'as' => 'permission']);
    //Route::post('/add/permission', ['uses' => 'App\Http\Controllers\UserController@addpermission', 'as' => 'addpermission']);


    // sessions


    // Auth::routes();

    Route::get('/patients', ['uses' => 'App\Http\Controllers\PatientController@index', 'as' => 'patients.list']);

    Route::get('/patients/create', ['uses' => 'App\Http\Controllers\PatientController@create', 'as' => 'patients.create']);

    Route::post('/patients/store', ['uses' => 'App\Http\Controllers\PatientController@store', 'as' => 'patients.store']);

    Route::post('/patients/update', ['uses' => 'App\Http\Controllers\PatientController@update', 'as' => 'patients.update']);

    Route::post('/patients/destroy', ['uses' => 'App\Http\Controllers\PatientController@destroy', 'as' => 'patients.destroy']);

    Route::get('/patients/import', ['uses' => 'App\Http\Controllers\PatientController@import', 'as' => 'patients.import']);

    Route::post('/patients/upload', ['uses' => 'App\Http\Controllers\PatientController@upload', 'as' => 'patients.upload']);

Route::get('/providers', ['uses' => 'App\Http\Controllers\ProviderController@index', 'as' => 'providers.list']);

    Route::get('/providers/create', ['uses' => 'App\Http\Controllers\ProviderController@create', 'as' => 'providers.create']);

    Route::post('/providers/store', ['uses' => 'App\Http\Controllers\ProviderController@store', 'as' => 'providers.store']);

    Route::post('/providers/update', ['uses' => 'App\Http\Controllers\ProviderController@update', 'as' => 'providers.update']);

    Route::post('/providers/destroy', ['uses' => 'App\Http\Controllers\ProviderController@destroy', 'as' => 'providers.destroy']);

    Route::get('/providers/import', ['uses' => 'App\Http\Controllers\ProviderController@import', 'as' => 'providers.import']);

    Route::post('/providers/upload', ['uses' => 'App\Http\Controllers\ProviderController@upload', 'as' => 'providers.upload']);

    Route::get('/home', ['uses' => 'App\Http\Controllers\DashboardController@index', 'as' => 'home']);

    Route::get('/referral', ['uses' => 'App\Http\Controllers\ReferralController@referral', 'as' => 'referral']);
});
// Route::group(['middleware' => 'auth'], function () {

// });
