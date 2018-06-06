<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'id_category' => rand(1,3),
        'title' => 'Leather bag',
        'short_description' => $faker->text(71),
        'description' => $faker->text(200),
        'image' => 'images\pics06.jpg',
    ];
});
