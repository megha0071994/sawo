<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\VehicleType;
use App\Models\Vehicle;

class ApiController extends Controller
{
	public function check_mobile_no(Request $request)
	{
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
		$result = array(
			"status"=>'true',
			"otp" => $user->otp
			);
		echo json_encode($result);
	}
	
	public function resend_otp(Request $request)
	{
		$user = User::where('mobile',$request->mobile)->get()->first();
		if($user) {
            $user->otp = 1234; //rand(1000,9999);
            $user->update();
        }
		$user = User::where('mobile',$request->mobile)->get()->first();
		$result = array(
			"status"=>'true',
			"otp" => $user->otp
			);
		echo json_encode($result);
	}
	
	public function vehicle()
	{
		$vehicle = Vehicle::select('id','driver_id','vehicle_no','vehicle_name')
					->where('verification',1)
					->where('status',1)
					->where('deleted_at',0)
					->get()->toArray();
		$result = array(
			"data" => $vehicle
		);
		echo json_encode($result);
	}
	
	public function vehicle_type()
	{
		$data = VehicleType::select('id','name')
					->where('status',1)
					->where('deleted_at',0)
					->get()->toArray();
		$result = array(
			"data" => $data
		);
		echo json_encode($result);
	}
}