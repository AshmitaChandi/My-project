<?php

namespace App\Http\Controllers\customer;
use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index(){
		// dd("we reached");
		return view ('customer.message.index');
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
        return redirect()->route('customer.message.index');
    }
}


