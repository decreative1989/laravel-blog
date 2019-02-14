<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Web\Gallery::class, function (Faker $faker) {
    $title = $faker->sentence(5);
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'description' => $faker->text(250),
        'image' => $faker->numberBetween(1, 9) . '.jpg'
    ];
});
