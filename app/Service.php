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
    		    
    }   
    public function Customer($value='')
    {
        return $this->hasMany('App\Customer');
                
    }   
      
    public function Category($value='')
    {
    	return $this->belongsTo('App\Category');
    }
}