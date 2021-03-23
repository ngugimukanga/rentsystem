<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'tenant_id'=> function(){
            return \App\Tenant::all()->random();
        },
        'unit_id'=> function(){
            return \App\Unit::all()->random();
        },
        'month'=> $faker->randomElement(['feb/2020', 'dec/2019','jan/2019', 'aug/2019', 'sep/2021']),
        'paid_amount'=> $faker->numberBetween(5000, 10000),
        //'balance'=>

    ];
});
