<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  
	protected $fillable=[
<<<<<<< HEAD


    	'employee_name','availability_status','service_id','email'
=======
      'employee_name','availability_status','service_id','email'
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b
    ];     
    	
   	public function service($value='') 
   	{
   		return $this->belongsTo('App\Service');
   	}    


}
