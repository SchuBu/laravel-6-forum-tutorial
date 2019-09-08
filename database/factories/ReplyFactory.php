<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reply;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,100),
        'thread_id' => rand(1,100),
        'body' => $faker->text(400),
    ];
});
