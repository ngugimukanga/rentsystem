<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Payment::class, function (Faker $faker) {
    return [
        'unit_id' => factory(\App\Unit::class),
        'tenant_id' => factory(\App\Tenant::class),
        'month' => $faker->date(),
        'paid_amount' => $faker->randomNumber(),
        'balance' => $faker->randomNumber(),
    ];
});
