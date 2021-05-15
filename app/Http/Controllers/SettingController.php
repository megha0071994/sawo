<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function save_text_setting(Request $request)
    {
    	$data=$request->all();
    	foreach($data as $key => $value)
    	{
    		$setting=Setting::where('key_text',$key)->get()->first();
    		if($setting)
            {
                $setting->value_text=$value;
    		    $setting->update();
            }
    	}
    	$arr=array('status'=>'true','message'=>'Setting Successfully Saved');
        echo json_encode($arr);
    }
    public function save_image_setting(Request $request)
    {
            $file = $request->file($_POST['field']);
            $filename  = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            if($extension=='jpg' || $extension=='png' || $extension=='jpeg' || $extension=='PNG' || $extension=='JPG' || $extension=='JPEG')
            {
                $file_name   = date('His').'-'.$filename;
                $file->move(public_path('front/image/setting'), $file_name);
                $img=Setting::where('key_text',$_POST['field'])->get()->first();
                if($img)
                {
                    $img->value_text=$file_name;
                    $img->update();
                }
                $arr=array('status'=>'true','message'=>'Success','reload'=>url('admin/setting/general_setting'));
            }
            else 
            {
                $arr=array('status'=>'false','message'=>'Only JPG And PNG File Are Allowed');
            }
            echo json_encode($arr);
    }
    
}
