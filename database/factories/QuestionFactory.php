<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(rand(5 , 10)) , "."),
        'body' =>$faker->paragraph(rand(3 , 5) , true),
        'views' => $faker->randomDigit(0, 10),
        'answers' => $faker->randomDigit(0, 10),
        'votes' => $faker->randomDigit(-3, 10)
    ];
});
