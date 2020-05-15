<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Accueil;
use Faker\Generator as Faker;

$factory->define(Accueil::class, function (Faker $faker) {
    $cate = [
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
        'fashion', 'people', 'nature', 'sports', 'technics', 'transport'];
    return [
        'img_Accueil' => $faker->imageUrl(500,300,$faker->randomElement($cate)),
        'titre' => $faker->name(),
        'description' => $faker->text(),
    ];
});
