<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Apartment::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'landlord_id' => factory(App\Landlord::class),
        'address' => $faker->address,
        'type' => $faker->randomElement(['singles', 'bedsitters', 'flats', '1 bedroom', '2 bedroom', 'mansionnate']),
        'description' => $faker->sentence,
    ];
});
