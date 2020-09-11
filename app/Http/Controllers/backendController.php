<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backendController extends Controller
{
    public function dashboardfun($value='')
    {
    	
    	return view('backend.dashboard');
    }

    public function appointmentfun($value='')
    {
    	
    	return view('backend.appointments');
    }
}
