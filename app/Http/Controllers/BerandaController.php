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

}
