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

    //  public function servicefun($value='')
    //  {
    //     // $services =Service::all();
    //  	return view('services');
    // }

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
<<<<<<< HEAD
   
   public function bookingfun($value='')
=======

     public function footcarefun($value='')
     {
        
        return view('footcare');
    }

     public function handcarefun($value='')
     {
        
        return view('handcare');
    }

    public function spafun($value='')
     {
        
        return view('spa');
    }

    public function facecarefun($value='')
>>>>>>> c370591f260ffafd17d5466cec5e4d0d2d0ca533
     {
        
        return view('booking');
    }
   
<<<<<<< HEAD
=======
    // public function mainfun($value='')
    // {
    //     return view('main');
    // }


>>>>>>> c370591f260ffafd17d5466cec5e4d0d2d0ca533
>>>>>>> 54b5126ee6bd48455d97390fb11888da844304eb
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
<<<<<<< HEAD

=======
    
>>>>>>> c370591f260ffafd17d5466cec5e4d0d2d0ca533
>>>>>>> 54b5126ee6bd48455d97390fb11888da844304eb
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
    public function skintherapyfun($value='')
    {
        $services =DB::table('services')->where('service_name','skintherapy')->get();
        return view('skintherapy',compact('services'));
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
<<<<<<< HEAD
     public function skintherapydetailfun($id)
    {
        $services = Service::find($id);
        return view('skintherapydetail',compact('services'));
    }

=======
<<<<<<< HEAD
=======

>>>>>>> c370591f260ffafd17d5466cec5e4d0d2d0ca533
>>>>>>> 54b5126ee6bd48455d97390fb11888da844304eb
}
