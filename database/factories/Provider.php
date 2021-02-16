<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Provider;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Provider::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => Str::random(10),
        'mobile' => Str::random(10),
        'email' => $faker->unique()->safeEmail,
        'contact' => $faker->name,
        'city' => 'cdmx',
        'state' => 'cdmx',
        'postal' => Str::random(7),
        'country' => 'México',
        'adress' => $faker->address,
        'adressTwo' => $faker->address,
        'details' => $faker->sentence(8)
    ];
});
