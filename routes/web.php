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

if ( file_exists( app_path( 'Http/Controllers/LocalizationController.php') ) ) 
{
  Route::get('lang/{locale}', 'App\Http\Controllers\LocalizationController@lang');
}
Route::group(['middleware' => 'language'], function() {
	Route::prefix('admin')->group(function(){
		Route::get('/', ['App\Http\Controllers\AdminAuth'::class, 'index']);
		Route::post('/login', ['App\Http\Controllers\AdminAuth'::class, 'login']);
		Route::group(['middleware' => 'my_auth'], function() {
			
			Route::get('/getJSON/{type}', ['App\Http\Controllers\Admin'::class, 'getJSON']);
			
			Route::get('/dashboard', ['App\Http\Controllers\Admin'::class, 'dashboard']);
			
			Route::get('/category', ['App\Http\Controllers\Admin'::class, 'category']);
			Route::prefix('products')->group(function(){ 
				Route::get('/category', ['App\Http\Controllers\ProductController'::class, 'category']);
				Route::match(['get','post'],'/getCategory', ['App\Http\Controllers\ProductController'::class, 'getCategory']);
				Route::post('/category/{type}', ['App\Http\Controllers\ProductController'::class, 'category']);
			});
			
			Route::get('/sub-category', ['App\Http\Controllers\Admin'::class, 'sub_category']);
			Route::prefix('products')->group(function(){ 
				Route::get('/sub-category', ['App\Http\Controllers\ProductController'::class, 'sub_category']);
				Route::match(['get','post'],'/getSubCategory', ['App\Http\Controllers\ProductController'::class, 'getSubCategory']);
				Route::post('/sub-category/{type}', ['App\Http\Controllers\ProductController'::class, 'sub_category']);
			});
			
		});
	});
});
