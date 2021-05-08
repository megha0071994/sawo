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

Route::get('/admin', ['App\Http\Controllers\Admin'::class, 'index']);
Route::get('/admin/dashboard', ['App\Http\Controllers\Admin'::class, 'dashboard']);
Route::get('/admin/category', ['App\Http\Controllers\Admin'::class, 'category']);