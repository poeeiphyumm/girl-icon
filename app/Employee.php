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
<<<<<<< HEAD

     ];     
    // 	'employee_name','availability_status'
    // ];

=======
    ];     
    	
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
   	public function service($value='') 
   	{
   		return $this->belongsTo('App\Service');
   	}    


}
