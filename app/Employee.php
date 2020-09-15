<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  
	protected $fillable=[
    	'employee_name','email','availability_status'
    ];
   	public function service($value='') 
   	{
   		return $this->belongsTo('App\Service');
   	}    

}
