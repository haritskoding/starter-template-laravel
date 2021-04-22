<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;

class LoginController extends Controller
{
    //

    public function index()
    {
        //
        return view('auth.Login');
    }


    public function postLogin(Request $request){
      //  dd($request->all());
     
      $validator = Validator::make($request->all(), [
        'name' => 'required',
        'password' => 'required'
    ]);

    if ($validator->fails()) {
        return back()->with('toast_error', 'username or password is empty')->withInput();
    }
       if(Auth::attempt($request->only('name','password'))){
           return redirect('profile')->with('toast_success','Success login');
       }
       return redirect('/')->with('toast_error','User name or password wrong');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/')->with('toast_success','You have logged out');
    }
}
