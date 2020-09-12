<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Customer;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        // $appointments=Appointment::all();
        // return view('backend.appointments.index',compact('appointments')); 

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $appointments=Appointment::all();
        $customers=Customer::all();

        return view('backend.appointments.create',compact('customers','appointments'));

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

        //validation
        $request->validate([
            "date"=>'required',
            "time"=>'required',
            "appointment_status"=>'required',
            "customer_id"=>'required'
            ]);

        //Data insert
        $appointment=new Appointment;
        
        //$appointment->email=$request->email;
        $appointment->date=$request->date;
        $appointment->time=$request->time;
        $appointment->appointment_status=$request->appointment_status;
        $appointment->customer_id=$request->customer_id;
        $appointment->save();

        //redirect
        return redirect()->route('appointments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
