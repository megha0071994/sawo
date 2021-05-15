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
			Route::get('/support', ['App\Http\Controllers\Admin'::class, 'support']);
			Route::prefix('vehicle')->group(function(){ 
				Route::get('/', ['App\Http\Controllers\VehicleController'::class, 'index']);
				Route::match(['get','post'],'/add', ['App\Http\Controllers\VehicleController'::class, 'add']);
				Route::match(['get','post'],'/edit/{id}', ['App\Http\Controllers\VehicleController'::class, 'edit']);
				Route::post('/subcat/{id}', ['App\Http\Controllers\VehicleController'::class, 'subcat']);
				Route::post('/manageStatus/{id}', ['App\Http\Controllers\VehicleController'::class, 'manageStatus']);
				Route::match(['get','post'],'/getvehicle', ['App\Http\Controllers\VehicleController'::class, 'getvehicle']);
			});
			Route::prefix('setting')->group(function(){ 
				Route::get('/',function(){
					return view('admin.setting.general_setting',['page_title'=>__('lang.settings'),'page_title2'=>__('lang.settings')]);
				});
				Route::post('save_text_setting',['App\Http\Controllers\SettingController'::class, 'save_text_setting']);
			});
			
		});
	});
});
