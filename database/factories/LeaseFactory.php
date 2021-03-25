<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Lease::class, function (Faker $faker) {
    return [
        'unit_id' => factory(\App\Unit::class),
        'tenant_id' => factory(\App\Tenant::class),
        'from' => $faker->date(),
        'to' => $faker->date(),
    ];
});
