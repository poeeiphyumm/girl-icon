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
    	return $this->hasMany('App\Employee');
    }
=======
    
    

    public function Employee($value='')
    {
    	return $this->hasMany('App\Employee');
    }   
>>>>>>> db3e7b8476ef096fd01afdfc4050d6b5adfc720c
    public function Category($value='')
    {
    	return $this->belongsTo('App\Category');
    }
}