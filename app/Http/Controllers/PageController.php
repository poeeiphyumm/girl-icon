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
<<<<<<< HEAD

    public function bodycarefun($value='')
     {
        
        return view('bodycare');
    }

   
    public function mainfun($value='')
=======
    public function registerfun($value='')
>>>>>>> 779ba2dccfb78cee22a13760d11d4b739f603b06
    {
        
        return view('register');
    }
    public function ourservicefun($value='')
    {
        return view('ourservice');
    }
     public function bodycarefun($value='')
    {
        return view('bodycare');
    }

}
