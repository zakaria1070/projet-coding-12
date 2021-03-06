<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Work;
use Faker\Generator as Faker;

$factory->define(Work::class, function (Faker $faker) {
    $cate = [
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
        'fashion', 'people', 'nature', 'sports', 'technics', 'transport'];
    return [
        'img_work' => $faker->imageUrl(500,300,$faker->randomElement($cate)),
        'titre' => $faker->name(),
        'date' => $faker->text(),
        'description' => $faker->text(),
    ];
});
