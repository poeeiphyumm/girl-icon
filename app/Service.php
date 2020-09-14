<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable=[
    	'service_name','duration','price','category_id','photo'
    ];
<<<<<<< HEAD
    public function Employee($value='')
    {
    	return $this->belongsToMany('App\Employee','service_detail')
    		->withPivot('')
    		->withTimestamps();
=======

    public function Employee($value='')
    {
    	return $this->belongsToMany('App\Employee','service_details')
    				->withPivot('service_name')
    				->withTimestamp();
>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
    }
    public function Category($value='')
    {
    	return $this->belongsTo('App\Category');
    }
}