<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $fillable=[
    	'customer_name','email','address','ph_no','gender'
    ]; 
    public function appointment($value='')
    {
    	return $this->hasMany('App\Appointment');
    }
    public function category($value='')
    {
    	return $this->hasMany('App\Category');
    }
 }
