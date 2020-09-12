<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
<<<<<<< HEAD
     protected $fillable=[

      
        'customer_name','date','time','appointment_status'
    ];
      
    // protected $fillable=[
    // 	'appointment_name','customer_id','date','time','appointment_status'
    // ];  
    // 	'appointment_name','customer_name','date','time','appointment_status'
    // ];

=======
    protected $fillable=[
    	'appointment_name','customer_id','date','time','appointment_status'
    ];  
    	
>>>>>>> 59d6fc47b7f852f605170916d2edab85d83a6f93
    public function customer($value='')
    {
        return $this->belongsTo('App\Customer');
    }
<<<<<<< HEAD


     // protected $fillable =[
    	// 'customer_name','employee_name,date,time,status'];
=======
}
>>>>>>> 59d6fc47b7f852f605170916d2edab85d83a6f93

}
