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
>>>>>>> aea75e1bfcf7d807b73aef5326ec19c706c69c9a

    public function customer($value='')
    {
        return $this->belongsTo('App\Customer');
    }

     // protected $fillable =[
    	// 'customer_name','employee_name,date,time,status'];
}


