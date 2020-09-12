<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=[
    	'employee_name','email'
    ];


	protected $fillable=[
    	'employee_name','availability_status'
    ];     

}
