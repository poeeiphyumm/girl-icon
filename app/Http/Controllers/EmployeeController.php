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
       
         // $services=DB::table('employees')->join('services','services.id','=','employees.service_id')->select('employees.*','services.*','services.service_name as cname')->get();

         // $employees=Employee::all();

        $services=Service::all();
        $employees=DB::table('services')->join('employees','services.id','=','employees.service_id')->select('employees.*','services.*','services.service_name as cname')->get();
        
        return view('backend.employees.index',compact('services','employees'));
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

        //  $imageName = time().'-'.$request->photo->extension();
        // $request->photo->move(public_path('backend/employeeimg'),$imageName);
        // // ပုံပတ်လမ်းကြောင်းသိမ်း
        // $path = 'backend/employeeimg/'.$imageName;
        //
        //Data insert
        $employee = new Employee;
        
        $employee->employee_name = $request->employee_name;
        $employee->service_id = $request->service_id;
        $employee->availability_status = $request->availability_status;
        $employee->email = $request->email;
        // $employee->photo=$path;
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
    */
      public function edit($id)
    {
         $services=Service::all();
         // $employees=Employee::all();
         $employee=Employee::find($id);
        return view('backend.employees.edit',compact('services','employee'));
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
         //$request က edit form  ထဲက data ပါလာ
      // dd($request);
         // $request->validate([
         //    "employee_name" => 'required',
         //    "email" => 'required',
         //    "service_id" => 'required',
         //    "availability_status" => 'required'
       //dd($request);
         $request->validate([
            "employee_name" => 'required',
            "email" => 'required',
            "photo"=>'required',
            "service_id" => 'required',
            "availability_status" => 'required',
             // "oldphoto" => 'required'
            
             ]);
       
        //  if($request->hasFile('photo')){
        //     $imageName = time().'.'.$request->photo->extension();

        //             $request->photo->move(public_path('backend/employeeimg'),$imageName);

        //                     $path = 'backend/employeeimg/'.$imageName;

        // }else{
        //     $path=$request->oldphoto;
        // }
        $employee = new Employee;
        $employee->employee_name = $request->employee_name;
         $employee->email = $request->email;
         // $employee->photo=$path;
        $employee->service_id= $request->service_id;
        $employee->availability_status=$request->availability_status;
       
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
        $post=Service::find($id);
        $post->delete();
        return redirect()->back();      
    }
    
}