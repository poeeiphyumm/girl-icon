<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  
	protected $fillable=[


    	'employee_name','availability_status','service_id','email'
<<<<<<< HEAD

     ];     
    // 	'employee_name','availability_status'
    // ];

=======
    ];     
    	
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
   	public function service($value='') 
   	{
   		return $this->belongsTo('App\Service');
   	}    


}
