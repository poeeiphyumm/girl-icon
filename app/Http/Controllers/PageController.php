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
     public function bookingfun($value='')
     {
        
     	return view('booking');
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
