<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Thread;
use Faker\Generator as Faker;

$factory->define(Thread::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,20),
        'title' => $faker->sentence,
        'body' => $faker->text(400),
    ];
});
