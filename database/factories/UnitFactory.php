<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Unit::class, function (Faker $faker) {
    return [
        'apartment_id' => factory(App\Apartment::class),
        'house_number' => $faker->word,
        'rent' => $faker->randomElement(['10000','20000','35000', '25000', '50000']),
        'vacant' => $faker->boolean,
    ];
});
