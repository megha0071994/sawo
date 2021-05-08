<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Session;
class AdminAuth extends Controller
{
    public function index()
	{
		if(Session::get('admin_session')) {
			return redirect('admin/dashboard');
		} else {
			return view('admin.auth.login');
		}
		
	}
	public function login(Request $request)
	{
        $validator=Validator::make($request->all(),['email'=>'required','password'=>'required']);
			if($validator->passes()) {
				$resp=User::select(['id','name','email','access'])->where('email',$request->email)->where('password',md5($request->password))->get()->toArray();
				if($resp) {
					$request->session()->put('admin_session',$resp);
					$arr=array('status'=>'true','message'=>'success','reload'=>asset('admin/dashboard'));
				} else {
					$arr=array('status'=>'false','message'=>'Invelid User');	
				}
			}else{
				$arr=array('status'=>'false','message'=>$validator->errors()->all());
			}
			echo json_encode($arr);
	}
}
