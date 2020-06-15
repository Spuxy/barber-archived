<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Barber;

$factory->define(Barber::class, function (Faker $faker) {
    return [
        'name'=>$faker->firstName('man'),
        'lastName'=>$faker->name('man')
    ];
});
