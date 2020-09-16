<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  
	protected $fillable=[
      'employee_name','availability_status','service_id','email'
    ];     
    	
   	public function service($value='') 
   	{
   		return $this->belongsTo('App\Service');
   	}    


}
