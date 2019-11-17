<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
	public function index(){
		// dd("we reached dashboard");
		return view ('admin.dashboard');
	}
	public function logout(){
		session()->flush();
		session()->flash('message','Successfully logged out');
		return redirect()->route('admin.login');
	}
}