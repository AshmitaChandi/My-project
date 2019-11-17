<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function register(){
        // #dd("We reached admin");
        return view('admin.register');
    }
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
        ])){
             dd("registered");   
        }

    }

}
