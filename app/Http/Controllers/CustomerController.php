<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Category;
use App\Appointment;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $customers=Customer::all();
        return view('backend.customers.index',compact('customers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers=Customer::all();
        // $categories=Category::all();
        // $appointments=Appointment::all();
        return view("backend.customers.create",compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
         $request->validate([
            "customer_name" => 'required',
            "email" => 'required',
            "address" => 'required',
            "phone_no" => 'required',
            "gender" => 'required',

        ]);

        //

        // //If include file,upload file
        // $imageName = time().'-'.$request->photo->extension();
        // $request->photo->move(public_path('backend/categoryimg'),$imageName);
        // // ပုံပတ်လမ်းကြောင်းသိမ်း
        // $path = 'backend/categoryimg/'.$imageName;
        //
        //Data insert
        $customer = new Customer;
        
        $customer->customer_name = $request->customer_name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone_no = $request->phone_no;
        $customer->gender = $request->gender;

        $customer->save();

        //redirect
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
