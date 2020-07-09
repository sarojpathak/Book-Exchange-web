<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;
use App\User;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'author'=>$faker->name,
        'description' => $faker->paragraph,
        'image'=>$faker->image,
        'condition'=>$faker->sentence,
        'belongs_to'=>factory('App\User')->create()->id,
    ];
});
