<?php

namespace App\Http\Controllers\customer;
use App\reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReserveController extends Controller
{
    public function index(){
		// dd("we reached");
		return view ('customer.reserve.index');
	}

	public function store(Request $request){
// dd($request);
         $this-> validate($request,['email'=>'required','phone'=>'required','destination'=>'required','checkin'=>'required','checkout'=>'required']);

         $reservation = new Reservation();

         $reservation->email =$request->email;
         $reservation->phone =$request->phone;
         $reservation->destination =$request->destination;
         $reservation->checkin =$request->checkin;
         $reservation->checkout =$request->checkout;
         
         

         $reservation->save();
          //  dd($request);
      


		// dd("we reached");

         	//Package::where('name', 'like', '%'. $request->name. '%')->get();

         session()->flash('message','Thankyou');
		return redirect()->route('customer.reserve.index');
	}
}

