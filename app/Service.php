<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
<<<<<<< HEAD
    protected $fillable=[
    	'service_name','duration','price','category_id','photo'
    ];
    public function Employee($value='')
    {
    	return $this->belongsToMany('App\Employee','service_detail')
    		->withPivot('')
    		->withTimestamps();
=======
    protected $fillable = [
    	'service_name','duration','price',
    ];
    public function Employee($value='')
    {
    	return $this->belongsToMany('App\Employee','service_details')
    				->withPivot('service_name')
    				->withTimestamp();
>>>>>>> 54b5126ee6bd48455d97390fb11888da844304eb
    }
    public function Category($value='')
    {
    	return $this->belongsTo('App\Category');
    }
}
