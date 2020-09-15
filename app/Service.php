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
    	return $this->hasMany('App\Employee');
<<<<<<< HEAD
    		    
    }
=======
    }    
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1
    public function Category($value='')
    {
    	return $this->belongsTo('App\Category');
    }
}