<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function register(){
        // #dd("We reached customer");
        return view('customer.register');
    }
    // 
    public function submit(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'first name' => 'required',
            'last name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm password' => 'required'
        ]);

        dd(bcrypt('$ submit password'));

        if(Auth::attempt([
            'first name' => 'required',
            'last name' => 'required',
            'email' => $request->email,
            'password' => $request->password,
            'confirm password' => 'required',
            'is_active' => '1'
        ]))
            if($register->save()){
            session()->flash('message', 'Successfully registered');
            return redirect()->route('customer.register');
        }else{
            session()->flash('error', 'Something went wrong.');
            return redirect()->back();
        }
    }

}
