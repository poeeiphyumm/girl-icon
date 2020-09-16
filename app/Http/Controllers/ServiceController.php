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

         $services=Service::all();

        $categories=Category::all();
        
        return view('backend.services.index',compact('services','categories'));

        //$categories=Category::all();

=======
        $services=Service::all();
        //$categories=Category::all();
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
        return view('backend.services.index',compact('services'));

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=Service::all();
        $categories=Category::all();
<<<<<<< HEAD

        //return view("backend.services.create",compact('services'));

        return view('backend.services.create',compact('services','categories'));



=======

        return view('backend.services.create',compact('services','categories'));
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
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

=======
    {
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
       
       //dd($request);
         //If include file,upload file
       //dd($request);
        //  $request->validate([
        //     "service_name" => 'required',
        //     "duration" => 'required',
        //     "price" => 'required',
        //     "category_id" => 'required',
        //     "photo"=>'required',
            
        // ]);

<<<<<<< HEAD
        // $imageName = time().'.'.$request->photo->extension();
         //If include file,upload file


    
        //If include file,upload file

       // dd($request);
        //  $request->validate([
        //     "service_name" => 'required',
        //     "duration" => 'required',
        //     "price" => 'required',
        //     "category_id" => 'required',
        //     "photo"=>'required'
            
        // ]);

        
        $imageName = time().'.'.$request->photo->extension();

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


=======
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
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

<<<<<<< HEAD
        $service->category_id=$request->category_id;


=======
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
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
<<<<<<< HEAD

        // $services=Service::all();

        // $services=DB::table('employees')->join('services.id','employees.id')->where('services.id',$id)->get();

        $services=DB::table('employees')->join('services.id','employees.id')->where('services.id',$id)->get();

        $service=Service::all();
        // $service=Service::where('services.id',$id)->first();
        $employees=Employee::all();
        //dd($service);
        return view('backend.services.show',compact('service','employees'));


        
        // $employees = DB::table('employees')->join('services.id','employees.id')->where('services.id',$id)->get();
                

       // dd($servicedetail);
        $services = Service::where('services.id',$id)->first();
        dd($services);

        return view('backend.services.show',compact('services'));

       // // dd($servicedetail);
        $services = Service::all();
        // $employees=Employee::where('employees.employee_name',)->first();
       //dd($employees);
        return view('backend.servicedetail.index',compact('services'));
          // ->with(['services'=>$services]); 

=======
    
        $service=Service::where('services.id',$id)->first();
        // $employee=Employee::where('employees.id',$id)->first();
        $employees=Employee::all();
        //dd($service);
        return view('backend.services.show',compact('service','employees'));
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
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
