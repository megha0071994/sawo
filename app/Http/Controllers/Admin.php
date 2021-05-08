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
	public function getJSON($type) {
		if($type=='category') {
            $arr=array(
                array('data'=>'id','name'=>'id'),
                array('data'=>'name','name'=>'name'),
                array('data'=>'status','name'=>'status'),
                array('data'=>'action','name'=>'action'),
            );
        }
		echo json_encode($arr);
	}
	
}