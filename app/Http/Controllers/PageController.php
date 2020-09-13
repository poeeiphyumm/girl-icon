<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;
class PageController extends Controller
{
    public function mainfun($value='')
    {
        $services=Service::all();
        return view('main',compact('services'));
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

    public function bodycarefun($value='')
     {

        $services=Service::all();
        return view('services',compact('services'));
    }

   
    public function registerfun($value='')
    {
        
        return view('register');
    }

}
