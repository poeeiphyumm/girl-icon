<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Service;
use DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $service=Service::all();

        $employees=DB::table('services')->join('employees','employees.service_id','=','services.id')->select('employees.*','services.*','services.service_name as service')->get();

        return view('backend.employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        // dd($employees);
        $services=Service::all();
        return view("backend.employees.create",compact('services'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
         $request->validate([
            "employee_name" => 'required',
             "service_id" => 'required',
            "availability_status" => 'required',
            "email" => 'required',
        ]);

        //
        //Data insert
        $employee = new Employee;
        
        $employee->employee_name = $request->employee_name;
        $employee->service_id = $request->service_id;
        $employee->availability_status = $request->availability_status;
        $employee->email = $request->email;
        $employee->save();

        //redirect
        return redirect()->route('employees.index');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
         $services=Service::all();
         // $employees=Employee::all();
<<<<<<< HEAD
         $employees=Employee::all();
=======
        $employees=Employee::all();
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b
        return view('backend.employees.edit',compact('services','employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
<<<<<<< HEAD
         //$request က edit form  ထဲက data ပါလာ
      // dd($request);
         // $request->validate([
         //    "employee_name" => 'required',
         //    "email" => 'required',
         //    "service_id" => 'required',
         //    "availability_status" => 'required'
       //dd($request);
=======
       dd($request);
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b
         $request->validate([
            "employee_name" => 'required',
            "email" => 'required',
            "service_id" => 'required',
            "availability_status" => 'required'
            
             ]);
        //$employee = new Employee;
        $employee->employee_name = $request->employee_name;
        $employee->service_id= $request->service_id;
        $employee->availability_status=$request->availability_status;
        $employee->email = $request->email;
        $employee->save();

        //redirect
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Employee::find($id);
        $post->delete();
        return redirect()->back();      
    }
    
}
