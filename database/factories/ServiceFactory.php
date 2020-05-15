<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    $cate = [
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
        'fashion', 'people', 'nature', 'sports', 'technics', 'transport'];
    return [
        'img_service' => $faker->imageUrl(500,300,$faker->randomElement($cate)),
        'titre' => $faker->name(),
        // 'titre2' => $faker->name(),
        'description' => $faker->text(),
    ];
});
