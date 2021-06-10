<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ContactRequest;
use App\Models\SubCategory;
use App\Models\City;
use App\Models\Vehicle;
use App\Models\Driver;
use App\Models\Notification;
use Session;

class HomeController extends Controller
{
    public function index(){
        $data['subCategory'] = SubCategory::where('status','1')->where('deleted_at',0)->get()->toArray();
        $data['subCategory1'] = SubCategory::where('cat_id',1)->where('status','1')->where('deleted_at',0)->get()->toArray();
        $data['subCategory2'] = SubCategory::where('cat_id',2)->where('status','1')->where('deleted_at',0)->get()->toArray();
        return view('home',$data);
    }
    public function cityname($name) {
        $name = trim($name);
        $City = City::where('name',$name)->get()->toArray();
        if(count($City)) {
            echo $City[0]['id'];
        } else {
            echo 1;
        }
    }
    public function login() {
        if(Session::get('userinfo')) {
            return redirect('/');
        } else {
            return view('login');
        }

    }
	public function logout(Request $request)
	{
		$request->session()->forget('userinfo');
		return redirect(url(''));
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
							->where('sw_vehicle.cat_id', 1)
							->get()->toArray();
			}
			if($filter_type==0){
				$data['work_location'] = $_REQUEST['work_location'];
				$data['city_work'] = $_REQUEST['city_work'];

				$vehicle = Vehicle::select('sw_driver.fname', 'sw_driver.lname', 'sw_vehicle.driver_id', 'sw_driver.id', 'sw_vehicle.id as vehicle_tb_id', 'sw_vehicle.vehicle_image')
							->join('sw_driver', 'sw_driver.id', '=', 'sw_vehicle.driver_id')
							->where('sw_vehicle.work_location', $data['city_work'])
							->where('sw_vehicle.cat_id', 2)
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
		// echo "<pre>"; print_r($vehicle); die;
        return view('more_details')->with('vehicle', $vehicle);
    }
    public function sendOtp(Request $request){
        $user = User::where('mobile',$request->mobile)->get()->first();
        if($user) {
            $user->otp = 1234; //rand(1000,9999);
            $user->update();
        } else {
            $user = new User();
            $user->otp =  1234;//rand(1000,9999);
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
    public function profile(Request $request){
        if(request()->ajax()){
           $obj = User::where('id',Session::get('userinfo')->id)->get()->first();
           $obj->name = $request->name;
           $obj->email = $request->email;
           $obj->mobile = $request->mobile;
           $obj->address = $request->address;
           $obj->save();
           echo json_encode(array('status'=>'true','message'=>'Success','reload'=>url('profile')));
        } else {
            if(Session::get('userinfo')) {
                $data['user_info'] = User::where('id',Session::get('userinfo')->id)->get()->first();
                return view('profile',$data);    
            } else {
                return redirect(url('login'));
            }
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
	public function notifications($type='', $id='', Request $request)
	{
		if($type=='skip'){
			$row = Notification::where('id',$id)->get()->first();
			$row->respond = 0;
			$row->update();
			return redirect(url('notifications'));
		} else if($type=='accept'){
			$row = Notification::where('id',$id)->get()->first();
			$row->respond = 1;
			$row->update();
			return redirect(url('notifications'));
		} else {
			$user = Session::get('userinfo');
			$data['notifications'] = Notification::select('sw_notifications.id', 'sw_notifications.payment', 'sw_driver.fname', 'sw_driver.lname', 'sw_vehicle.vehicle_no')
									->join('sw_driver', 'sw_driver.id', '=', 'sw_notifications.driver_id')
									->join('sw_vehicle', 'sw_vehicle.id', '=', 'sw_notifications.driver_id')
									->where('sw_notifications.user_id',$user->id)
									->where('sw_notifications.respond',null)
									->get()->toArray(); // echo "<pre>"; print_r($data['notifications']); die;
			return view('notifications', $data);
		}
	}
}