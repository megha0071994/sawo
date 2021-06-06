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
Route::get('/', ['App\Http\Controllers\HomeController'::class, 'index']);
Route::get('/more-details', ['App\Http\Controllers\HomeController'::class, 'more_details']);
Route::match(['get','post'],'/contact', ['App\Http\Controllers\HomeController'::class, 'contact']);
Route::get('/about', function(){ return view('about'); });
Route::get('/privacy-policy', function(){ return view('privacy-policy'); });
Route::get('/terms-condition', function(){ return view('terms-condition'); });
Route::get('/help-support', ['App\Http\Controllers\HomeController'::class, 'helpsupport']);
Route::get('/login', ['App\Http\Controllers\HomeController'::class, 'login']);
Route::get('/login/{id}', ['App\Http\Controllers\HomeController'::class, 'login']);
Route::post('/sendOtp', ['App\Http\Controllers\HomeController'::class, 'sendOtp']);
Route::post('/checkOtp',['App\Http\Controllers\HomeController'::class, 'checkOtp']);
if ( file_exists( app_path( 'Http/Controllers/LocalizationController.php') ) ) 
{
  Route::get('lang/{locale}', 'App\Http\Controllers\LocalizationController@lang');
}
Route::group(['middleware' => 'language'], function() {
	Route::prefix('admin')->group(function(){
		Route::get('/', ['App\Http\Controllers\AdminAuth'::class, 'index']);
		Route::get('/logout', ['App\Http\Controllers\AdminAuth'::class, 'logout']);
		Route::post('/login', ['App\Http\Controllers\AdminAuth'::class, 'login']);
		Route::group(['middleware' => 'my_auth'], function() {
			
			Route::get('/getJSON/{type}', ['App\Http\Controllers\Admin'::class, 'getJSON']);
			
			Route::get('/dashboard', ['App\Http\Controllers\Admin'::class, 'dashboard']);
			
			// Route::get('/category', ['App\Http\Controllers\Admin'::class, 'category']); // for example
			 
			Route::get('/category', ['App\Http\Controllers\ProductController'::class, 'category']);
			Route::match(['get','post'],'/getCategory', ['App\Http\Controllers\ProductController'::class, 'getCategory']);
			Route::post('/category/{type}', ['App\Http\Controllers\ProductController'::class, 'category']);
		
			Route::get('/sub-category', ['App\Http\Controllers\ProductController'::class, 'sub_category']);
			Route::match(['get','post'],'/getSubCategory', ['App\Http\Controllers\ProductController'::class, 'getSubCategory']);
			Route::post('/sub-category/{type}', ['App\Http\Controllers\ProductController'::class, 'sub_category']);
			
			Route::get('/vehicle-type', ['App\Http\Controllers\ProductController'::class, 'vehicle_type']);
			Route::match(['get','post'],'/getVehicleType', ['App\Http\Controllers\ProductController'::class, 'getVehicleType']);
			Route::post('/vehicle-type/{type}', ['App\Http\Controllers\ProductController'::class, 'vehicle_type']);
			
			Route::get('/driver', ['App\Http\Controllers\DriverController'::class, 'index']);
			Route::get('/driver/add', ['App\Http\Controllers\DriverController'::class, 'add']);
			Route::get('/driver/edit/{driver_id}', ['App\Http\Controllers\DriverController'::class, 'edit']);
			Route::get('/driver/edit', ['App\Http\Controllers\DriverController'::class, 'edit']);
			Route::match(['get','post'],'/getDriver', ['App\Http\Controllers\DriverController'::class, 'getDriver']);
			Route::post('/driver/{type}', ['App\Http\Controllers\DriverController'::class, 'curd']);
			
			Route::post('/get-sub-category-by-category/{id}', ['App\Http\Controllers\ProductController'::class, 'get_sub_cat_by_cat_id']);
			
			Route::get('/support', ['App\Http\Controllers\Admin'::class, 'support']);
			Route::prefix('vehicle')->group(function(){ 
				Route::get('/', ['App\Http\Controllers\VehicleController'::class, 'index']);
				Route::match(['get','post'],'/add', ['App\Http\Controllers\VehicleController'::class, 'add']);
				Route::match(['get','post'],'/edit/{id}', ['App\Http\Controllers\VehicleController'::class, 'edit']);
				Route::post('/subcat/{id}', ['App\Http\Controllers\VehicleController'::class, 'subcat']);
				Route::post('/vehicle-type/{id}', ['App\Http\Controllers\VehicleController'::class, 'vehicle_type']);
				Route::post('/manageStatus/{id}', ['App\Http\Controllers\VehicleController'::class, 'manageStatus']);
				Route::match(['get','post'],'/getvehicle', ['App\Http\Controllers\VehicleController'::class, 'getvehicle']);
			});
			Route::prefix('setting')->group(function(){ 
				Route::get('/',function(){
					return view('admin.setting.general_setting',['page_title'=>__('lang.settings'),'page_title2'=>__('lang.settings')]);
				});
				Route::get('/compliencepages',function(){
					return view('admin.setting.compliencepages',['page_title'=>__('lang.compliencepages'),'page_title2'=>__('lang.compliencepages')]);
				});
				Route::post('save_text_setting',['App\Http\Controllers\SettingController'::class, 'save_text_setting']);
			});
			
		});
	});
});
