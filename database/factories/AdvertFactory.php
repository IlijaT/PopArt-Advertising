<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Advert;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Advert::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->sentence,
        'state' => $faker->word,
        'price' => $faker->numberBetween(100, 100000),
        'street' => $faker->streetAddress,
        'city' => $faker->city,
        'country' => $faker->country,
        'phone' => $faker->phoneNumber,
        'user_id' => factory(User::class),
        'category_id' => factory(Category::class)
    ];
});
