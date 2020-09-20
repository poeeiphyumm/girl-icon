<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable=[
    	'service_name','duration','price','category_id','photo'
    ];
    public function employees($value='')
    {
    	return $this->hasMany('App\Employee');
<<<<<<< HEAD
    		    
    }   
    public function Customer($value='')
    {
        return $this->hasMany('App\Customer');
                
    }   
      
=======
    }   
>>>>>>> bd94691d4693e1bf90fcaac5cfc2e21d06e72905
    public function Category($value='')
    {
    	return $this->belongsTo('App\Category');
    }
}