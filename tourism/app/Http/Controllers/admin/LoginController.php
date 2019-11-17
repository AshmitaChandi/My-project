<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        // #dd("We reached admin");
        return view('admin.login');
    }
    // public function submit(){
     // return view('login.submit');
    // }

    public function submit(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        // dd(bcrypt('123456'));

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'is_active' => '1'
        ])){
             // dd("logged in");
            return redirect()->route('admin.dashboard');
        }else {
            //dd("failure");
            session()->flash('message', 'Sorry, email or password is incorrect.');
            return redirect()->back();
        }

    








    }

}

