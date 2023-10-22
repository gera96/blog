<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CategoryPost;
use Faker\Generator as Faker;

$factory->define(CategoryPost::class, function (Faker $faker) {
    return [
        'category_id' => rand(1, 5),
        'post_id' => rand(1, 100),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
