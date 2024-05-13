<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PatientController;
use App\Http\Controllers\Api\DataController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/patients", [PatientController::class, "register"]);
Route::get("/patients/transfer-in/{mflcode}/{createdAt}", [PatientController::class, "transfers_in"]);
Route::get("/patients/referral-status/{mflcode}/{patients}", [PatientController::class, "referral_status"]);
Route::get("/directory/{code?}/{name?}", [DataController::class, "directory"]);
Route::get("/patient/{cccno}/regimen", [DataController::class, "patient_regimen"]);
Route::get("/facility/directory/{code?}/{name?}", [DataController::class, "facility_directory"]);
