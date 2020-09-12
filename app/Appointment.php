<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable=[
<<<<<<< HEAD
    	'appointment_name','customer_id','date','time','appointment_status'
    ];  
=======
    	'appointment_name','customer_name','date','time','appointment_status'
    ];
      
>>>>>>> c5cc876b2f99bf14e61612310435ffbbd7784e2c
    public function customer($value='')
    {
    	return $this->belongsTo('App\Customer');
    }

     // protected $fillable =[
    	// 'customer_name','employee_name,date,time,status'];
<<<<<<< HEAD

=======
>>>>>>> c5cc876b2f99bf14e61612310435ffbbd7784e2c
}

