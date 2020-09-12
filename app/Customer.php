<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=[
    	'customer_name','email','address','phonr_no','gender'
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
