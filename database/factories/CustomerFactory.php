<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'customer_name'=>$faker->sentence($nbWords =3),
        'email'=>$faker->unique()->safeEmail,
        'address'=>$faker->address,
        'phone_no'=>$faker->phoneNumber,
        'gender'=>$faker->randomElements(['male','female']),
    ];

});


