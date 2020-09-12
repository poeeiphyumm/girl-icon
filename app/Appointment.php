<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{

    protected $fillable=[
    	'appointment_name','customer_id','date','time','status'
    ];  
    	
    public function customer($value='')
    {
        return $this->belongsTo('App\Customer');
    }

}


