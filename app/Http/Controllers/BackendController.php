<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backendController extends Controller
{
    public function dashboardfun($value='')
    {
    	
    	return view('backend.dashboard');
    }
    // public function createfun($value='')
    // {
    	
    // 	return view('backend.categories.create');
    // }
    // public function indexfun($value='')
    // {
    	
    // 	return view('backend.categories.index');
    // }
   
}
