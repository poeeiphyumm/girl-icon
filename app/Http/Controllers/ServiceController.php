<?php

namespace App\Http\Controllers;
use App\Service;
use App\Category;
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
        $services=Service::all();
        //$categories=Category::all();
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
        return view("backend.services.create",compact('services','categories'));
        

        
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
         //If include file,upload file
       //dd($request);
         $request->validate([
            "service_name" => 'required',
            "duration" => 'required',
            "price" => 'required',
            "category_id" => 'required',
            "photo"=>'required',
            
        ]);

        $imageName = time().'.'.$request->photo->extension();
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
        $service->category_id=$request->category;


        $service->photo=$path;
        $service->category_id=$request->category_id;


        $service->photo=$path;

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

        
        $services = DB::table('employees')->join('service_details','service_details.employee_id','=','employees.id')->where('service_details.service_id',$id)->get();
                
       // dd($servicedetail);
        $services = Service::where('services.id',$id)->first();
        dd($services);
        return view('backend.services.show',compact('services'));
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
            // "category_id"=>'required',
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
        $service->category_id=$request->category;
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
