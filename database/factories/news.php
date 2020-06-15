<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\News;
use App\Photo;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
	    'body' => $faker->realText(),
	    'photo_id' => factory(Photo::class),
	    'published_at' => $faker->date()
    ];
});
