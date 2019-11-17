<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
   public function index(){
		// dd("we reached");
		return view ('customer.about.index');
	}
}
