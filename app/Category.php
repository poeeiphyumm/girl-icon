<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
    	'category_name','photo'
    ];  
    public function service($value='')
    {
    	return $this->hasMany('App\Service');
    }
}
