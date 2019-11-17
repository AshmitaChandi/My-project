<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;

class BlogController extends Controller
{
     public function index(){
		// dd("we reached");
		$data['blogs'] = Blog::all();
		return view ('customer.blog.index', $data);
	}
}
