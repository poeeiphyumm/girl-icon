<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Service;
use App\Appointment;
use Carbon\Carbon;
use App\Employee;
use DB;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

     public function __construct($value='')
    {
         //$this->middleware('role:Admin')->only('index','show',);
         //$this->middleware('role:Customer')->only('store');
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
            $customers=Customer::whereBetween('date',
                [   
                    new Carbon($date1), 
                    new Carbon($date2)
                ])->where('address',0)->get();
        }
        else{
            $customers=Customer::all();
        }

         $services=DB::table('services')->join('customers','customers.service_id','=','services.id')->select('customers.*','services.*','services.service_name as cname')->get();

        // $customers=DB::table('services')->join('customers','services.id','=','customers.service_id')->select('services.*','customers.*','services.service_name as cname')->get();
         // //
         //$services=Service::all();

         //dd($customers);
         $customers=Customer::all();
         //dd($services);
         return view('backend.customers.index',compact('customers','services')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers=Customer::all();

         $services=Service::all();
         //$appointments=Appointment::all();
        return view("backend.customers.create",compact('customers','services'));

       
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
           "date" => 'required',        
            "phone_no" => 'required',
            "gender" => 'required',
            "service_id" => 'required',
            "address" => 'required'


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
        $customer->date= $request->date;
        $customer->phone_no = $request->phone_no;
        $customer->gender = $request->gender;
        $customer->service_id =$request->service_id;
        $customer->address = $request->address;
        $customer->save();

        //redirect
        return redirect()->back();
        //return redirect()->route('customers.index');
    }

    /**
     * Display customerthe specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employees=DB::table('customers')->join('employees','employees.service_id','=','customers.service_id')->join('services','services.id','=','employees.service_id')->select('employees.*','customers.*','services.*','employees.employee_name as aa')->get();
        // $employees=Employee::find($id);
        // dd($employees);
        //$customers=Customer::all();
        return view('backend.customers.detail',compact('employees'));
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
    public function destroy($id)
    {
        $post=Service::find($id);
        $post->delete();
        return redirect()->back();    
    }
}