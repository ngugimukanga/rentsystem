<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Apartment;
use Faker\Generator as Faker;

$factory->define(Apartment::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,
        'landlord_id'=> function(){
        return \App\Landlord::all()->random();
        },
        'address'=> $faker->address,
        'type'=> $faker->randomElement(['mansionate', '2 bedroom',  '3 bedroom', 'flats', 'bedsitters']),
        'description'=> $faker->sentence,
    ];
});
