<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{

    protected $fillable=[

    	'appointment_name','customer_id','date','time','appointment_status'
<<<<<<< HEAD
    ];  
    	
=======
    ];    

>>>>>>> 0a0420093c6558844862c8bd631e8fa40aa9bfcc
    public function customer($value='')
    {
        return $this->belongsTo('App\Customer');
    }

     // protected $fillable =[
    	// 'customer_name','employee_name,date,time,status'];
}


