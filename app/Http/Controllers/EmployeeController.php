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
        $service=Service::all();
         $employees=DB::table('services')->join('employees','employees.service_id','=','services.id')->select('services.*','employees.*','service_name as service')->get();
        return view('backend.employees.index',compact('employees','service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees=Employee::all();
        $services=Service::all();
        return view("backend.employees.create",compact('employees','services'));

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
        return redirect()->route('backend.employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        // $employee=Employee::where('employees.id',$id)->first();
        // return view('backend.services.show',compact('service','employees'));
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
        $employees=Employee::all();
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
      // dd($request);
         $request->validate([
            "employee_name" => 'required',
            "email" => 'required',
            "service_id" => 'required',
            "availability_status" => 'required'
            
             ]);
        $employee = new Employee;
        $employee->employee_name = $request->employee_name;
        $employee->service_id= $request->service_id;
        $employee->availability_status=$request->availability_status;
        $employee->email = $request->email;
        $employee->save();

        //redirect
        return redirect()->route('backend.employees.index');
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
