<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable=[
    	'service_name','duration','price','category_id','photo'
    ];
    public function Employee($value='')
    {
    	return $this->hasMany('App\Employee');
<<<<<<< HEAD

    }    

=======
    		    
    }
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
    public function Category($value='')
    {
    	return $this->belongsTo('App\Category');
    }
}