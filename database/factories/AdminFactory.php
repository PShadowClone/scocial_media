<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(\App\Models\Admin::class, function (Faker $faker) {
    return [
        'name' => 'superAdmin',
        'username' => 'super_admin',
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => \Illuminate\Support\Facades\Hash::make('123456q'), // password
        'remember_token' => Str::random(10),
    ];
});
