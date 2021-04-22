<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
use Validator;


class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cust = Customer::paginate(5);
        return view('Customers.Data-Customers',compact('cust'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Customers.Create-Customers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'gender' => 'required',
            'bod' => 'required',
            'cc' => 'required',
            'email' => 'required',
            // 'password' => 'required',
            'phonenumber' => 'required',
            'address' => 'required'
        ]);
    
        if ($validator->fails()) {
            return back()->with('toast_error', 'form must be filled')->withInput();
        }

        Customer::create([
            'name'=>$request->name,
            'gender'=>$request->gender,
            'bod'=>$request->bod,
            'cc'=>$request->cc,
            'email'=>$request->email,
            'phonenumber'=>$request->phonenumber,
            'address'=>$request->address,
        ]);

        return redirect('data-customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
