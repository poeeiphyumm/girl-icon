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
<<<<<<< HEAD
       
         // $services=DB::table('employees')->join('services','services.id','=','employees.service_id')->select('employees.*','services.*','services.service_name as cname')->get();

         // $employees=Employee::all();


        //$services=Service::all();
        $employees=DB::table('services')->join('employees','services.id','=','employees.service_id')->select('employees.*','services.*','services.service_name as cname')->get();
        
        return view('backend.employees.index',compact('employees'));
=======
        $service=Service::all();
        $employees=DB::table('services')->join('employees','employees.service_id','=','services.id')->select('services.*','employees.*','services.service_name as service')->get();
        return view('backend.employees.index',compact('employees','service'));
>>>>>>> cb1e6f28d3024a8d525ecff6397a50b072efd72a
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee=Employee::all();
        $services=Service::all();
        return view("backend.employees.create",compact('employee','services'));

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
            "email" => 'required'
           
        ]);

        
        //Data insert
        $employee = new Employee;
        
        $employee->employee_name = $request->employee_name;
        $employee->service_id = $request->service_id;
        $employee->availability_status = $request->availability_status;
        $employee->email = $request->email;
        $employee->save();

        //redirect
        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
<<<<<<< HEAD
     */
    public function edit($id)
=======
    */
      public function edit($id)
>>>>>>> 1b4d201405a93444aa7ecffbdb516baaf27cda70
    {
<<<<<<< HEAD
         
        $services=Service::all();
        //$employees=Employee::all();

        $employees=DB::table('services')->join('employees','employees.service_id','=','services.id')->where('employees.service_id',$id)->select('employees.*','services.*','services.service_name as cname')->first();

        // dd($employees);
        return view('backend.employees.edit',compact('services','employees'));

=======
        //dd($employee);
         $services=Service::all();
         // $employees=Employee::all();
         $employee=Employee::find($id);
        return view('backend.employees.edit',compact('services','employee'));
>>>>>>> cb1e6f28d3024a8d525ecff6397a50b072efd72a
    }



    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Employee  $employee
    //  * @return \Illuminate\Http\Response
    //  */
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
      
       //dd($employee);
>>>>>>> cb1e6f28d3024a8d525ecff6397a50b072efd72a
         $request->validate([
            "employee_name" => 'required',
            "email" => 'required',
            "service_id" => 'required',
            "availability_status" => 'required',
            
             ]);
<<<<<<< HEAD
       
         
        //$employee = new Employee;
=======
        $employee = new Employee;
>>>>>>> cb1e6f28d3024a8d525ecff6397a50b072efd72a
        $employee->employee_name = $request->employee_name;
         $employee->email = $request->email;
         // $employee->photo=$path;
        $employee->service_id= $request->service_id;
        $employee->availability_status=$request->availability_status;
       
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
        $post=Service::find($id);
        $post->delete();
        return redirect()->back();      
    }
    
}