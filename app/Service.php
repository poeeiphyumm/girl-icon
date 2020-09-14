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
    	return $this->belongsToMany('App\Employee','service_detail')
    		->withPivot('')
    		->withTimestamps();
    }
    public function Category($value='')
    {
    	return $this->belongsTo('App\Category');
    }
}