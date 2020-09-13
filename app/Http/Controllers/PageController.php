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
<<<<<<< HEAD
=======

    public function bodycarefun($value='')
     {

        $services=Service::all();
        return view('services',compact('services'));
    }

<<<<<<< HEAD
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


>>>>>>> aea75e1bfcf7d807b73aef5326ec19c706c69c9a
   
    // public function mainfun($value='')
    // {
    //     return view('main');
    // }

    public function registerfun($value='')

=======

    public function registerfun($value='')
>>>>>>> d056c456610e9c9c51a748b7a0444981262a4ded
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
