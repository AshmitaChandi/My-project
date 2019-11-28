<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

class HomeController extends Controller
{
    public function index(){
    	$messages = Message::all();
    	return view('customer.home',compact('messages'));
    }
    public function logout(){
		session()->flush();
		session()->flash('message','Successfully logged out');
		return redirect()->route('customer.login');
	}

	public function chatPost(Request $request )
	{
		 $this->validate($request, ['message'=>'required|min:2|max:50']);
		

		$message = new Message;
		$message->message = $request->message;
		$message->save();

		session()->flash('sucess','Your message is delivered');
		return redirect()->back();
	}
}