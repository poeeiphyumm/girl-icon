<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     public function bookingfun($value='')
     {
        
     	return view('booking');
    }

   
    public function mainfun($value='')
    {
    	return view('main');
    }

}
