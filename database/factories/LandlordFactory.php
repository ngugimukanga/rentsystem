<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Landlord;
use Faker\Generator as Faker;

$factory->define(Landlord::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'phone'=> $faker->phoneNumber,
        'account_number'=> $faker->bankAccountNumber

    ];
});
