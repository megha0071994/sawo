<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ContactRequest;
use App\Models\Vehicle;
use App\Models\Driver;
use Session;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function login() {
        if(Session::get('userinfo')) {
            return redirect('/');
        } else {
            return view('login');   
        }
    }
    public function more_details(){
		if(!$_REQUEST){
			return redirect(url(''));
		}
		$data = array();
		$vehicle = array();
		$filter_type = '';
		$second_level_cat = '';
		if(isset($_REQUEST['type'])){
			$second_level_cat = $_REQUEST['type'];
		}
		
		if(isset($_REQUEST['filter_type'])){
			$filter_type = $_REQUEST['filter_type'];
			if($filter_type==1){
				$data['from_location'] = $_REQUEST['from_location'];
				$data['from_city'] = $_REQUEST['city_from'];
				$data['to_location'] = $_REQUEST['to_location'];
				$data['to_city'] = $_REQUEST['city_to'];
				
				$vehicle = Vehicle::select('sw_driver.fname', 'sw_driver.lname', 'sw_vehicle.driver_id', 'sw_vehicle.id as vehicle_tb_id', 'sw_vehicle.vehicle_image')
							->join('sw_driver', 'sw_driver.id', '=', 'sw_vehicle.driver_id')
							->where('sw_vehicle.work_location', $data['from_city'])
							->get()->toArray();
			}
			if($filter_type==0){
				$data['work_location'] = $_REQUEST['work_location'];
				$data['city_work'] = $_REQUEST['city_work'];
				
				$vehicle = Vehicle::select('sw_driver.fname', 'sw_driver.lname', 'sw_vehicle.driver_id', 'sw_driver.id', 'sw_vehicle.id as vehicle_tb_id', 'sw_vehicle.vehicle_image')
							->join('sw_driver', 'sw_driver.id', '=', 'sw_vehicle.driver_id')
							->where('sw_vehicle.work_location', $data['city_work'])
							->get()->toArray();
			}
		}
		
		if(isset($_REQUEST['vehicle_type'])){
			$data['vehicle_type'] = $_REQUEST['vehicle_type'];
			
			$vehicle = Vehicle::select('sw_driver.fname', 'sw_driver.lname', 'sw_vehicle.driver_id', 'sw_driver.id', 'sw_vehicle.id as vehicle_tb_id', 'sw_vehicle.vehicle_image')
							->join('sw_driver', 'sw_driver.id', '=', 'sw_vehicle.driver_id')
							->where('sw_vehicle.vehicle_type_id', $data['vehicle_type'])
							->get()->toArray();
		}
		// echo "<pre>"; print_r($_REQUEST); die;
        return view('more_details')->with('vehicle', $vehicle);; 
    }
    public function sendOtp(Request $request){
        $user = User::where('mobile',$request->mobile)->get()->first();
        if($user) {
            $user->otp = rand(1000,9999);
            $user->update();
        } else {
            $user = new User();
            $user->otp = rand(1000,9999);
            $user->mobile = $request->mobile;
            $user->save();
        }
        $user = User::where('mobile',$request->mobile)->get()->first();
        return redirect(url('login/'.encrypt($user->id)));
    }
    public function checkOtp(Request $request){
        $user = User::where('id',$request->user)->where('otp',$request->otp)->get()->first();
        if($user){
            Session::put('userinfo',$user);
            echo json_encode(array('status'=>'true','message'=>'Success','reload'=>url('')));
        } else {
            echo json_encode(array('status'=>'false','message'=>'Please Enter Valid OTP'));
        }
    }
    public function contact(Request $request){
        if(request()->ajax()) {
            $new = new ContactRequest();
            $new->name = $request->name;
            $new->email = $request->email;
            $new->mobileNo = $request->mobile;
            $new->comment = $request->message;
            $new->save();
            echo json_encode(array('status'=>'true','message'=>'Your Contact Query Successfully Send','reload'=>'0'));
        } else {
            return view('contact');
        }
        
    }
}
