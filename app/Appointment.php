<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{

    protected $fillable=[

    	'appointment_name','customer_id','date','time','appointment_status'
    ];  
    	
      

    public function customer($value='')
    {
        return $this->belongsTo('App\Customer');
    }

     // protected $fillable =[
    	// 'customer_name','employee_name,date,time,status'];
}


