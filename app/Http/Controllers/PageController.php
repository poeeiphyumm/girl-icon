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

<<<<<<< HEAD
     public function servicefun($value='')
     {
        
     	return view('services');
    }

    public function loginfun($value='')
=======
    public function contactfun($value='')
>>>>>>> 754a2997ec6786fc53d5111bad88909e0e710e06
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

}
