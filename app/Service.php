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
      
>>>>>>> cb1e6f28d3024a8d525ecff6397a50b072efd72a
    public function Category($value='')
    {
    	return $this->belongsTo('App\Category');
    }
}