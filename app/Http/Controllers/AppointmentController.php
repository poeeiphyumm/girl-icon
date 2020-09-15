<?php

namespace App\Http\Controllers;

use App\Appointment;
use Carbon\Carbon;
use App\Customer;
use App\Category;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function __construct($value='')
    {
        // $this->middleware('role:Admin')->only('index','show',);
        // $this->middleware('role:Customer')->only('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $date1=$request->start_date;
        $date2=$request->end_date;
        if ($request->start_date && $request->end_date){
            $appointments=Appointment::whereBetween('date',
                [   
                    new Carbon($date1), 
                    new Carbon($date2)
                ])->where('status',0)->get();
        }
        else{
            $appointments=Appointment::all();
        }

         //$appointments=Appointment::all();
         return view('backend.appointments.index',compact('appointments')); 

       


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

            "status"=>'required',
            //"appointment_status"=>'required',
            "customer_id"=>'required',
            // "photo"=>'required',
            // "customer_id"=>'required'

            //"appointment_status"=>'required',
            "customer_id"=>'required',

            ]);

        //Data insert
        $appointment=new Appointment;
        
        //$appointment->email=$request->email;
        $appointment->date=$request->date;
        //$appointment->date = date('Y-m-d');
        $appointment->time=$request->time;
        $appointment->status=$request->status;
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
        
        // $appointments=Appointment::all();
        // return view('backend.appointments.show',compact('appointments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
         $appointments=Appointment::all();
        $customers=Customer::all();

        return view('backend.appointments.edit',compact('customers','appointments'));
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
    //    //dd($request);

    //     //validation
    //     $request->validate([
    //         "date"=>'required',
    //         "time"=>'required',
    //         //"status"=>'required',
    //         "appointment_status"=>'required',
    //         "customer_id"=>'required',
    //         "photo"=>'required',
    //         ]);

    //     //Data update
    //     $appointment=new Appointment;
        
    //     //$appointment->email=$request->email;
    //     $appointment->date=$request->date;
    //     $appointment->time=$request->time;
    //     $appointment->appointment_status=$request->appointment_status;
    //     $appointment->customer_id=$request->customer_id;

    //     $appointment->save();

    //     //redirect
    //     return redirect()->route('appointments.index'); 
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
