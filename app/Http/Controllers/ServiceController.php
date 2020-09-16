<?php

namespace App\Http\Controllers;
use App\Service;
use App\Category;
use App\ServiceDetail;
use App\Employee;
use DB;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
         $services=DB::table('categories')->join('services','services.category_id','=','categories.id')->select('services.*','categories.*','category_name as category')->get();
        
        return view('backend.services.index',compact('services'));
=======
         $services=Service::all();
        $categories=Category::all();
        
        return view('backend.services.index',compact('services','categories'));
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
       

        // $services=Category::select('categories.*','services.service_name as category')->leftJoin('services','services.category_id','=','categories.id');

        $categories=Category::all();
        $services=Service::all();
        //dd($services);
        return view("backend.services.create",compact('services','categories'));
=======
        $services=Service::all();
        $categories=Category::all();
        return view("backend.services.create",compact('services','categories'));

        //return view("backend.services.create",compact('services'));

        return view('backend.services.create',compact('services','categories'));
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
<<<<<<< HEAD


    {


        //If include file,upload file

       // dd($request);
        //  $request->validate([
        //     "service_name" => 'required',
        //     "duration" => 'required',
        //     "price" => 'required',
        //     "category_id" => 'required',
        //     "photo"=>'required'
            
        // ]);

=======
    {

>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b
       //dd($request);
         //If include file,upload file
       //dd($request);
         $request->validate([
            "service_name" => 'required',
            "duration" => 'required',
            "price" => 'required',
            "category_id" => 'required',
            "photo"=>'required',
            
        ]);

        $imageName = time().'-'.$request->photo->extension();

        $request->photo->move(public_path('backend/serviceimg'),$imageName);
        // ပုံပတ်လမ်းကြောင်းသိမ်း
        $path = 'backend/serviceimg/'.$imageName;
         //Data insert
        $service = new Service;
        $service->service_name = $request->service_name;
        $service->duration = $request->duration;
        $service->price = $request->price;
        $service->photo=$path;
        $service->category_id=$request->category_id;
        $service->save();

        //redirect
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // $services=Service::all();
        // $services=DB::table('employees')->join('services.id','=','employees.service_id')->where('services.id',$id)->get();
<<<<<<< HEAD
        //$service=Service::find($id);
        $services=Service::find($id);
        $employees=Employee::all();
        //dd($service);
        return view('backend.servicedetail.index',compact('services','employees')); 



=======
        $service=Service::where('services.id',$id)->first();
        // $employee=Employee::where('employees.id',$id)->first();
        $employees=Employee::all();
        //dd($service);
        return view('backend.services.show',compact('service','employees'));
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        // dd($service);
        $service=Service::all();
        $categories=Category::all();
        return view('backend.services.edit',compact('service','categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //$request က edit form  ထဲက data ပါလာ
       // dd($request);
         $request->validate([
            "service_name" => 'required',
            "duration" => 'required',
            "price" => 'required',
            "photo"=>'sometimes',
            "category_id"=>'required',
            "oldphoto" => 'required'
        ]);

         if($request->hasFile('photo')){
            $imageName = time().'.'.$request->photo->extension();

                    $request->photo->move(public_path('backend/serviceimg'),$imageName);

                            $path = 'backend/serviceimg/'.$imageName;

        }else{
            $path=$request->oldphoto;
        }
        // $service = new Service;
        $service->service_name = $request->service_name;
        $service->duration = $request->duration;
        $service->price = $request->price;
        $service->category_id=$request->category_id;
        $service->photo=$path;
        $service->save();

        //redirect
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Service::find($id);
        $post->delete();
        return redirect()->back();      
    }
}
