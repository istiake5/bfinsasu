<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    $name = $faker->word;
    $slug = Str::slug($name);
    return [
        'name' => $name,
        'slug' => $slug,
    ];
});
