<?php

namespace App\Http\Controllers\admin;
use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index(){
    	$message = Message::all();

    	return view('admin.message.index',compact('message'));
    }
   
    public function reply(){
    	return view('admin.message.reply');
    	
    }
    public function store(Request $request){
// dd($request);
         $this-> validate($request,['message'=>'required']);

         $message = new Message();

         
         $message->message =$request->message;
         

         $message->save();
          //  dd($request);
      


        // dd("we reached");

            //Package::where('name', 'like', '%'. $request->name. '%')->get();

         session()->flash('message','Thankyou');
        return redirect()->route('admin.message.reply');
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
