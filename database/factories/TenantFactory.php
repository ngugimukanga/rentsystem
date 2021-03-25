<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Tenant::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt($faker->password),
        'phone' => $faker->phoneNumber,
        'national_id' => $faker->randomNumber(),
        'occupation' => $faker->randomElement(['employed', 'self-employed', 'student']),
    ];
});
