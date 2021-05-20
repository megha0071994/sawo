<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
}
