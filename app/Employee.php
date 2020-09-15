<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  
	protected $fillable=[
    	'employee_name','availability_status','service_id','email'
<<<<<<< HEAD
    ];     
    	
=======
    ]; 

>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1
   	public function service($value='') 
   	{
   		return $this->belongsTo('App\Service');
   	}    

}
