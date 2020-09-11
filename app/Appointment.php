<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
<<<<<<< HEAD
    protected $fillable=[
    	'appointment_name','customer_name','date','time','appointment_status'
    ];  
    public function customer($value='')
    {
    	return $this->belongsTo('App\Customer');
    }
=======
     // protected $fillable =[
    	// 'customer_name','employee_name,date,time,status'];
>>>>>>> adf2a71138a74024fcf35e9da2e3a218032d5c39
}

