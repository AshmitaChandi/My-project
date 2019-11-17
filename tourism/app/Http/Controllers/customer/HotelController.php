<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hotel;

class HotelController extends Controller
{
    public function index(){
		// dd("we reached");
		$data['hotels'] = Hotel::all();
		return view ('customer.hotel.index', $data);
	}
}
