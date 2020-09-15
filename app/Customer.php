<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=[
        'customer_name','email','date','phone_no','gender','service','address'
    ];
    public function appointments($value='')
    {
        return $this->hasMany('App\Appointment');
    }
    public function categories($value='')
    {
        return $this->hasMany('App\Category');
    }
}