<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
	public function dashboard()
	{
		$data = array(
			"page_title" => "Dashboard",
			"page_title2" => "Dashboard"
		);
		return view('admin.dashboard')->with($data);
	}
	
	public function category()
	{
		$data = array(
			"page_title" => "Category",
			"page_title2" => "Category"
		);
		return view('admin.category')->with($data);
	}
	
	public function getJSON($type) 
	{
		if($type=='category') {
            $arr=array(
                array('data'=>'id','name'=>'id'),
                array('data'=>'name','name'=>'name'),
                array('data'=>'status','name'=>'status'),
                array('data'=>'action','name'=>'action'),
            );
        }
		if($type=='sub-category') {
            $arr=array(
                array('data'=>'id','name'=>'id'),
                array('data'=>'cat_id','name'=>'cat_id'),
                array('data'=>'name','name'=>'name'),
                array('data'=>'status','name'=>'status'),
                array('data'=>'action','name'=>'action'),
            );
        }
		if($type=='vehicle-type') {
            $arr=array(
                array('data'=>'id','name'=>'id'),
                array('data'=>'name','name'=>'name'),
                array('data'=>'cat_id','name'=>'cat_id'),
                array('data'=>'sub_cat_id','name'=>'sub_cat_id'),
                array('data'=>'status','name'=>'status'),
                array('data'=>'action','name'=>'action'),
            );
        }
		if($type=='driver') {
            $arr=array(
                array('data'=>'id','name'=>'id'),
                array('data'=>'profile_pic','name'=>'profile_pic'),
                array('data'=>'name','name'=>'name'),
                array('data'=>'mobile_no','name'=>'mobile_no'),
                array('data'=>'address','name'=>'address'),
                array('data'=>'status','name'=>'status'),
                array('data'=>'action','name'=>'action'),
            );
        }
		echo json_encode($arr);
	}
	
}