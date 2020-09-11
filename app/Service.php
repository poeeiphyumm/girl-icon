<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	protected $fillable=[
    	'service_name','duration','price','category_id',
    ]; 
   
	 public function Employee($value='')
    	{
    		return $this->belongsToMany('App\Employee','service_detail')
    					->withPivot('')
    					->withTimestamps();
    	}  

    public function category($value='')
    {
    	return $this->belongsTo('App\Category');
    }

}
