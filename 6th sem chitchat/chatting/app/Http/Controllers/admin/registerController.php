<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class registerController extends Controller
{
    public function register(){
        // #dd("We reached admin");
        return view('admin.register');
    }
    public function store(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'first name' => 'required',
            'last name' => 'required',
            'email' => 'required',
            'password' => bcrypt($data['password']),
            'confirm password' => 'required'
        ]);

        dd(bcrypt('$ submit password'));

        if(Auth::attempt([
            'first name' => 'required',
            'last name' => 'required',
            'email' => $request->email,
            'password' => bcrypt($data['password']),
            'confirm password' => 'required',
            'is_active' => '1'
        ])){
             dd("registered");   
        }

    }

}
