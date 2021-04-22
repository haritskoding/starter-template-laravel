<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Position;
use App\Customer;

class BerandaController extends Controller
{
    //
    public function index()
    {
        //
        $countPeg = Pegawai::count();
        $countPos = Position::count();
        $cust = Customer::count();
        return view('beranda',compact('countPeg','countPos','cust'));
    }

    public function pageLoginAdmin(){
        return view('Page'.'Page-Admin');
    }

    public function pageLoginCommonEmployee(){
        return view('Page'.'Page-Employee');
    }


    public function pageLoginCustomer(){
        return view('Page'.'Page-Customer');
    }

    public function LookProfile(){
        return view('Look-Profile');
    }

}
