<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence($nbWords=3,true),
        'photo'=>'backend/categoryimg/'.$faker->image('public/backend/categoryimg',400,300,null,false),
    ];
});
