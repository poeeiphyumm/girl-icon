<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable=[
    	'service_name','duration','price','category_id','photo'
    ];
    public function Employee($value='')
    {
<<<<<<< HEAD
    	return $this->hasMany('App\Employee');

=======
    	return $this->belongsToMany('App\Employee','service_details','service_id','employee_id')
    		->withPivot('')
<<<<<<< HEAD
    		->withTimestamps();    
=======
    		->withTimestamps();
=======

    public function Employee($value='')
    {
    	return $this->belongsToMany('App\Employee','service_details')
    				->withPivot('service_name')
    				->withTimestamp();
>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
>>>>>>> 81011ab672b9183774899c38b26042145cf5e2a6
    }
    public function Category($value='')
    {
    	return $this->belongsTo('App\Category');
    }
}