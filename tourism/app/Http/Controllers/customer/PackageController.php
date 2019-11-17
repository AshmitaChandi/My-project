<?php
namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Package;
class PackageController extends Controller
{
     public function index(){
		// dd("we reached");
		$data['packages'] = Package::all();
		return view ('customer.package.index', $data);
	}

	public function search(Request $request){
		// dd("we reached");
		$data['packages'] = Package::where('name' , 'like', '%'. $request->search .'%')->get();
		return view ('customer.package.index', $data);
	}
}
