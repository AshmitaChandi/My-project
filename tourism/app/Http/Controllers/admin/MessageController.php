<?php

namespace App\Http\Controllers\admin;
use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index(){
    	$message = Message::all();
    	// dd($message);
    	// $message = message::where('is_active',1)->get();
    	$data['message']=$message;
    	return view('admin.message.index', $data);
    }
    public function delete($slug){
        if(Message::where('slug', $slug)->delete()){
            session()->flash('success', 'Message Deleted');
        }else{
            session()->flash('error', 'Something went wrong');
        }
        return redirect()->back();
    }
}
