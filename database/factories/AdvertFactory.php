<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Advert;
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
        'user_id' => factory(App\User::class)->create()->id,
        'category_id' => factory(App\Category::class)->create()->id
    ];
});
