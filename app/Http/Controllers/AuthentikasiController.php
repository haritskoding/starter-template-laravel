<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthentikasiController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
       dd($request->all());
    }
}
