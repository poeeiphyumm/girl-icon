<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  
	protected $fillable=[


    	'employee_name','availability_status','service_id','email'
<<<<<<< HEAD

=======
>>>>>>> cb1e6f28d3024a8d525ecff6397a50b072efd72a
    ];     
    	
   	public function service($value='') 
   	{
   		return $this->belongsTo('App\Service');
   	}    

   	// public function appointment($value='') 
   	// {
   	// 	return $this->belongsTo('App\Appointment');
   	// }    


}
