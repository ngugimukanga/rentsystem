<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Unit;
use Faker\Generator as Faker;

$factory->define(Unit::class, function (Faker $faker) {
    return [
        'apartment_id'=> function(){
            return \App\Apartment::all()->random();
        },
        'tenant_id'=> function(){
            return \App\Tenant::all()->random();
        },
        'house_number'=> $faker->numberBetween(001, 100),
        'rent' => $faker->numberBetween(8000, 18000),
        'status'=> $faker->randomElement(['occupied', 'vaccant'])
    ];
});
