<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->unique()->sentence;
    $isPublished = ['1', '0'];
    return [
        'user_id' => rand(1, 5),
        'title' => $title,
        'slug' => str_slug($title),
        'sub_title' => $faker->sentence,
        'details' => $faker->paragraph,
        'post_type' => 'post',
        'is_published' => $isPublished[rand(0, 1)],
    ];
});
