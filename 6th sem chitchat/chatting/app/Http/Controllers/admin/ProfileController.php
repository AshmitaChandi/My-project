<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(){
		// dd("we reached dashboard");
		return view ('admin.profile.index');
	}
}
