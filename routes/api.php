<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/check-mobile-no', ['App\Http\Controllers\ApiController'::class, 'check_mobile_no']);
Route::post('/resend-otp', ['App\Http\Controllers\ApiController'::class, 'resend_otp']);
Route::get('/vehicle', ['App\Http\Controllers\ApiController'::class, 'vehicle']);
Route::get('/vehicle-type', ['App\Http\Controllers\ApiController'::class, 'vehicle_type']);
Route::get('/driver-doc', ['App\Http\Controllers\ApiController'::class, 'driver_doc']);
