<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
     protected $fillable=[

      
        'customer_name','date','time','appointment_status'
    ];
      
    public function customer($value='')
    {
        return $this->belongsTo('App\Customer');
    }
}
