<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Thread;
use Faker\Generator as Faker;

$factory->define(Thread::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,20),
        'category_id' => Category::whereIsLeaf()->get()->random(1)->first()->id,
        'title' => $faker->sentence,
        'body' => $faker->text(400),
    ];
});
