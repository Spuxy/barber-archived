<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Photo;
use App\Barber;

$factory->define(Photo::class, function (Faker $faker) {
    return [
        'url' => $faker->url,
	    'name' => $faker->name,
	    'barber_id' => factory(Barber::class)
    ];
});
