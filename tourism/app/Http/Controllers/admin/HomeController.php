<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
		// dd("we reached dashboard");
		return view ('admin.home.index');
	}
}
