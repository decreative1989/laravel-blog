<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Web\Album::class, function (Faker $faker) {
    $title = $faker->sentence(3);
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'image' => $faker->numberBetween(1, 9) . '.jpg'
    ];
});
