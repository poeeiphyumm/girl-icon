<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function mainfun($value='')
    {
        return view('main');
    }
     public function bookingfun($value='')
     {
        
     	return view('booking');
    }

     public function servicefun($value='')
     {
        
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
        
        return view('bodycare');
    }

    public function registerfun($value='')
    {
        
        return view('register');
    }
    public function ourservicefun($value='')
    {
        return view('ourservice');
    }
    
}
