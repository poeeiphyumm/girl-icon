<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  
	protected $fillable=[
<<<<<<< HEAD
    	'employee_name','availability_status','service_id','email'
    ];     
=======
    	'employee_name','availability_status'
    ];
   	public function service($value='') 
   	{
   		return $this->belongsTo('App\Service');
   	}    
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114

}
