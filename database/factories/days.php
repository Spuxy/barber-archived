<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Day;

$factory->define(Day::class, function (Faker $faker) {
    return [
        'day' => '2020-06-02',
	    'reserved' => '0',
	    'time' => '',
    ];
});
