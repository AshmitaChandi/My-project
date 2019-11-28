<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForgotpasswordController extends Controller
{
    public function forgotpassword(){
        // #dd("We reached admin");
        return view('admin.forgotpassword');
    }
    public function submit(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'email' => 'required'
            ]);

        //dd(bcrypt('$ submit forgotpassword'));

        if(Auth::attempt([
            'email' => $request->email
            ])){
             dd(" password reset");   
        }

    }

}
