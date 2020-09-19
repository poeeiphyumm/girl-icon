<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=[
        'customer_name','email','date','phone_no','gender','service_id','address'
    ];
    // public function employee($value='')
    // {
    //     return $this->belongsTo('App\Employee');
    // }
    public function services($value='')
    {
        return $this->hasMany('App\Service');
    }
}