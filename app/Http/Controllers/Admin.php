<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index()
	{
		return view('admin.auth.login');
	}
	
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
	
}