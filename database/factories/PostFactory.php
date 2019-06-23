<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Post::class, function (Faker $faker) {

    return [
        'content' => $faker->paragraph(2),
        'address' => $faker->address,
        'image' => null,
        'user_id' => \App\User::inRandomOrder()->first()->id,
        'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
        'sub_category_id' => \App\Models\Category::inRandomOrder()->first()->id,
    ];
});
