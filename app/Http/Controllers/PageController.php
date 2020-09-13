<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use DB;
class PageController extends Controller
{
    public function mainfun($value='')
    {
        // $services=Service::all();
        return view('main');
    }
     public function appointmentfun($value='')
     {
        
     	return view('appointment');
    }

    public function contactfun($value='')
     {
        
        return view('contact');
    }

     public function servicefun($value='')
     {
        // $services =Service::all();
     	return view('services');
    }

    public function loginfun($value='')
     {
        
     	return view('login');
    }

    public function aboutfun($value='')
     {
        
        return view('about');
    }
<<<<<<< HEAD
=======

     public function footcarefun($value='')
     {
        
        return view('footcare');
    }

<<<<<<< HEAD
=======
     public function handcarefun($value='')
     {
        
        return view('handcare');
    }

    public function spafun($value='')
     {
        
        return view('spa');
    }

    public function facecarefun($value='')
     {
        
        return view('face');
    }
   
    // public function mainfun($value='')
    // {
    //     return view('main');
    // }

>>>>>>> 0014ba7e10f9f64c2e841d7072dfe0e2fc39d878

>>>>>>> ea9b5a970646e6c62eda2b850f3a2ed083e270f9
    public function registerfun($value='')
    {
        
        return view('register');
    }
    public function ourservicefun($value='')
    {
        return view('ourservice');
    }
<<<<<<< HEAD
    
=======
    public function bodycarefun($value='')
    {
        // $services = Service::all();
        $services =DB::table('services')->where('service_name','bodycare')->get();
        return view('bodycare',compact('services'));
    }
     public function skincarefun($value='')
    {
        $services =DB::table('services')->where('service_name','skincare')->get();
        return view('skincare',compact('services'));
    }
     public function haircarefun($value='')
    {
        $services =DB::table('services')->where('service_name','haircare')->get();
        return view('haircare',compact('services'));
    }
     public function nailcarefun($value='')
    {
        $services =DB::table('services')->where('service_name','nailcare')->get();
        return view('nailcare',compact('services'));
    }
    public function facecarefun($value='')
    {
        $services =DB::table('services')->where('service_name','facecare')->get();
        return view('facecare',compact('services'));
    }
    public function handcarefun($value='')
    {
        $services =DB::table('services')->where('service_name','handcare')->get();
        return view('handcare',compact('services'));
    }
    public function footcarefun($value='')
    {
        // $services = Service::all();
        $services =DB::table('services')->where('service_name','footcare')->get();
        return view('footcare',compact('services'));
    }
    public function sparestfun($value='')
    {
        $services =DB::table('services')->where('service_name','sparestcare')->get();
        return view('sparest',compact('services'));
    }

    public function bodycaredetailfun($id)
    {
        $services = Service::find($id);
        return view('bodycaredetail',compact('services'));
    }
     public function haircaredetailfun($id)
    {
        $services = Service::find($id);
        return view('haircaredetail',compact('services'));
    }
    public function skincaredetailfun($id)
    {
        $services = Service::find($id);
        return view('skincaredetail',compact('services'));
    }
    public function nailcaredetailfun($id)
    {
        $services = Service::find($id);
        return view('nailcaredetail',compact('services'));
    }
    public function handcaredetailfun($id)
    {
        $services = Service::find($id);
        return view('handcaredetail',compact('services'));
    }
    public function facecaredetailfun($id)
    {
        $services = Service::find($id);
        return view('facecaredetail',compact('services'));
    }
    public function footcaredetailfun($id)
    {
        $services = Service::find($id);
        return view('footcaredetail',compact('services'));
    }

>>>>>>> ea9b5a970646e6c62eda2b850f3a2ed083e270f9
}
