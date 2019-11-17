<?php

namespace App\Http\Controllers\customer;
use App\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
         public function index(){
            return view ('customer.book.index');
         }

         public function store(Request $request){
//dd($request);
         $this-> validate($request,['name'=>'required','email'=>'required','phone'=>'required','location'=>'required','destination'=>'required','date'=>'required']);

         $booking = new Booking();

         $booking->name = $request->name;
         $booking->email =$request->email;
         $booking->phone =$request->phone;
         $booking->location =$request->location;
         $booking->destination = $request->destination;
         $booking->date = $request->date;

         $booking->save();
          //  dd($request);
      


		// dd("we reached");

         	//Package::where('name', 'like', '%'. $request->name. '%')->get();

         session()->flash('message','Thankyou');
		return redirect()->route('customer.book.index');
	}
}