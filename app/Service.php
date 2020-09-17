<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable=[
    	'service_name','duration','price','category_id','photo'
    ];
    public function Employees($value='')
    {
    	return $this->hasMany('App\Employee');
<<<<<<< HEAD
    		    
    }
      
=======

    }    
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b
    public function Category($value='')
    {
    	return $this->belongsTo('App\Category');
    }
}