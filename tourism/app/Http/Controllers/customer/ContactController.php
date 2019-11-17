<?php

namespace App\Http\Controllers\customer;
use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
     public function index(){
		// dd("we reached");
		return view ('customer.contact.index');
	}
 public function store(Request $request){
// dd($request);
         $this-> validate($request,['name'=>'required','email'=>'required','subject'=>'required','message'=>'required']);

         $message = new Message();

         $message->name = $request->name;
         $message->email =$request->email;
         $message->subject =$request->subject;
         $message->message =$request->message;
         

         $message->save();
          //  dd($request);
      


        // dd("we reached");

            //Package::where('name', 'like', '%'. $request->name. '%')->get();

         session()->flash('message','Thankyou');
        return redirect()->route('customer.contact.index');
    }
}
