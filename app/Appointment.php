<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{

    protected $fillable=[
<<<<<<< HEAD
    	'appointment_name','customer_id','date','time','status'
=======

    	'appointment_name','customer_id','date','time','appointment_status'
    ];  

    	'appointment_name','customer_name','date','time','appointment_status'
    ];
      

    	'appointment_name','customer_id','date','time','appointment_status'
>>>>>>> 779ba2dccfb78cee22a13760d11d4b739f603b06
    ];  
    	
    public function customer($value='')
    {
        return $this->belongsTo('App\Customer');
    }

     // protected $fillable =[
    	// 'customer_name','employee_name,date,time,status'];
}


