<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
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
     {
        
        return view('face');
    }
   
    // public function mainfun($value='')
    // {
    //     return view('main');
    // }


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
        $services = Service::all();
        return view('bodycare',compact('services'));
    }
     public function skincarefun($value='')
    {
        $services = Service::all();
        return view('skincare',compact('services'));
    }
     public function haircarefun($value='')
    {
        $services = Service::all();
        return view('haircare',compact('services'));
    }
     public function nailcarefun($value='')
    {
        $services = Service::all();
        return view('nailcare',compact('services'));
    }

}
