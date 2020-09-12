<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{

    protected $fillable=[
<<<<<<< HEAD

    	'appointment_name','customer_id','date','time','appointment_status'
    ];  

    	'appointment_name','customer_name','date','time','appointment_status'
    ];
      
=======
    	'appointment_name','customer_id','date','time','appointment_status'
    ];  
    	
>>>>>>> 754a2997ec6786fc53d5111bad88909e0e710e06
    public function customer($value='')
    {
        return $this->belongsTo('App\Customer');
    }

<<<<<<< HEAD
     // protected $fillable =[
    	// 'customer_name','employee_name,date,time,status'];
=======
>>>>>>> 754a2997ec6786fc53d5111bad88909e0e710e06
}


