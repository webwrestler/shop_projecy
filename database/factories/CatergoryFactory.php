<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'title' => 'Woman bags',
        'alias' => 'w_bags',
        'status' => false,
    ];
});
