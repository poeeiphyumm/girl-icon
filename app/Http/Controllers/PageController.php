<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Category;
use DB;
class PageController extends Controller
{
    public function mainfun($value='')
    {
        $categories=Category::all();
        return view('main',compact('categories'));
    }
 

     public function bookingfun($value='')
     {
        $categories=Category::all();

        
         return view('booking',compact('categories'));


    }

    public function contactfun($value='')
     {
        
        return view('contact');
    }

    public function loginfun($value='')
     {
        
     	return view('login');
    }

    public function aboutfun($value='')
     {
        
        return view('about');
    }


    
    public function spafun($value='')
     {
        
        return view('spa');
    }

    


    public function registerfun($value='')
    {
        
        return view('register');
    }
    public function ourservicefun($value='')
    {
        return view('ourservice');
    }

    public function bodycarefun($value='')
    {
        // $services = Service::all();
        $services =DB::table('services')->where('category_id',2)->get();
        return view('bodycare',compact('services'));
    }

     public function skincarefun($value='')
    {
        $services =DB::table('services')->where('category_id',7)->get();
        return view('skincare',compact('services'));
    }

     public function haircarefun($value='')
    {
        $services =DB::table('services')->where('category_id',1)->get();
        return view('haircare',compact('services'));
    }

     public function nailcarefun($value='')
    {
        $services =DB::table('services')->where('category_id',3)->get();
        return view('nailcare',compact('services'));
    }

    public function facecarefun($value='')
    {
        $services =DB::table('services')->where('category_id',4)->get();
        return view('facecare',compact('services'));
    }
   
    public function footcarefun($value='')
    {
        // $services = Service::all();
        $services =DB::table('services')->where('category_id',6)->get();
        return view('footcare',compact('services'));
    }

    public function skintherapyfun($value='')
    {
        $services =DB::table('services')->where('category_id',8)->get();
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

     public function skintherapydetailfun($id)
    {
        $services = Service::find($id);
        return view('skintherapydetail',compact('services'));
    }
<<<<<<< HEAD


=======
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
}
