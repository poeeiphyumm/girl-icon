<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=[
        'customer_name','email','date','phone_no','gender','service_id','address'
    ];
   
    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}