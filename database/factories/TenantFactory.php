<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tenant;
use Faker\Generator as Faker;

$factory->define(Tenant::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'phone'=> $faker->phoneNumber,
        'national_id'=> $faker->numberBetween(22987456, 99846794),
        'occupation'=> $faker->randomElement(['employed', 'self-employed', 'student']),
    ];
});
