<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Exchange;
use Faker\Generator as Faker;
use App\User;
use App\Book;

$factory->define(App\Exchange::class, function (Faker $faker) {
    return [
        'book_offered'=> '25',
        'book_wanted' =>'26',
        'requested_by' =>'99',
        'requested_to'=> '100',
        'status'=>'In Progress',
    ];
});
