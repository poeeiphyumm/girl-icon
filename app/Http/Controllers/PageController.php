<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Service;


class PageController extends Controller
{
     public function bookingfun($value='')
     {
        
     	return view('booking');
    }

     public function servicefun($value='')
     {
        
     	return view('services');
    }

    public function contactfun($value='')
     {
        
     	return view('contact');
    }

    public function aboutfun($value='')
     {
        
        return view('about');
    }

   
    public function mainfun($value='')
    {
    	return view('main');
    }

}
