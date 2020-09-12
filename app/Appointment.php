<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{

    protected $fillable=[
<<<<<<< HEAD
=======
<<<<<<< HEAD
    	'appointment_name','customer_id','date','time','status'
=======
>>>>>>> 3ceaabc6b7079a2664321113b38556dceae1e77a

    	'appointment_name','customer_id','date','time','appointment_status'
    ];  

    	
      
<<<<<<< HEAD
    	
    	
=======

    	'appointment_name','customer_id','date','time','appointment_status'
>>>>>>> 779ba2dccfb78cee22a13760d11d4b739f603b06
    ];  
    	
>>>>>>> 3ceaabc6b7079a2664321113b38556dceae1e77a
    public function customer($value='')
    {
        return $this->belongsTo('App\Customer');
    }

     // protected $fillable =[
    	// 'customer_name','employee_name,date,time,status'];
}


