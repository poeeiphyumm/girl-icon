<?php

namespace App\Http\Controllers;
use App\Service;
use App\Category;
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

        

         // $services=DB::table('categories')->join('services','services.category_id','=','categories.id')->select('services.*','categories.*','categories.category_name as cname')->get();


        $services=Service::all();
        return view('backend.services.index',compact('services'));
=======
         $services=DB::table('categories')->join('services','services.category_id','=','categories.id')->select('services.*','categories.*','category_name as category')->get();
        $categories=Category::all();
        
        return view('backend.services.index',compact('services','categories'));
>>>>>>> bd94691d4693e1bf90fcaac5cfc2e21d06e72905

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        $services=Service::all();
        $categories=Category::all();
        return view("backend.services.create",compact('services','categories'));

=======

       $services=Service::all();
        $categories=Category::all();
        return view("backend.services.create",compact('services','categories'));
>>>>>>> bd94691d4693e1bf90fcaac5cfc2e21d06e72905
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     
  
<<<<<<< HEAD
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
=======
>>>>>>> bd94691d4693e1bf90fcaac5cfc2e21d06e72905
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
<<<<<<< HEAD
         $services=Service::find($id);
       
        // $categories=DB::table('services')->join('categories','categories.id','=','services.category_id')->select('services.*','categories.*','categories.category_name as caname')->first();

        // $services=DB::table('categories')->join('services','category_id','=','categories.id')->select('services.*','categories.*','categories.category_name as caname')->first();


        return view('backend.services.show',compact('services')); 
=======
        // $services=Service::all();
       
        $categories=DB::table('services')->join('categories','categories.id','=','services.category_id')->select('services.*','categories.*','categories.category_name as caname')->first();

        return view('backend.services.show',compact('categories')); 
>>>>>>> bd94691d4693e1bf90fcaac5cfc2e21d06e72905
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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