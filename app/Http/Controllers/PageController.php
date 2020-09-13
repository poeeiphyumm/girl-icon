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

    public function contactfun($value='')
     {
        
        return view('contact');
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

     public function haircarefun($value='')
     {
        
        return view('haircare');
    }

     public function nailcarefun($value='')
     {
        
        return view('nailcare');
    }

     public function footcarefun($value='')
     {
        
        return view('footcare');
    }

     public function handcarefun($value='')
     {
        
        return view('handcare');
    }

     public function skincarefun($value='')
     {
        
        return view('skincare');
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

}
