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
>>>>>>> bd94691d4693e1bf90fcaac5cfc2e21d06e72905

    ];     
      
    public function service($value='') 
    {
      return $this->belongsTo('App\Service');
    }    

}