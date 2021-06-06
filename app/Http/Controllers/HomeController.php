<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ContactRequest;
use App\Models\SubCategory;
use App\Models\City;
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
    public function more_details(){
        return view('more_details'); 
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
