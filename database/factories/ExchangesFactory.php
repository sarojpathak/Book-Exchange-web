<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Exchanges;
use Faker\Generator as Faker;
use App\User;
use App\Book;

$factory->define(App\Exchanges::class, function (Faker $faker) {
    return [
        'book_wanted' =>factory('App\Book')->create()->id,
        'book_offered'=> factory('App\Book')->create()->id,
        'requested_by' =>factory('App\User')->create()->id,
        'requested_to'=> factory('App\User')->create()->id,
        'status'=>$faker->sentence,
    ];
});
