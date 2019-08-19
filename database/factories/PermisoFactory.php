<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Permiso;
use App\Model;
use Faker\Generator as Faker;
$factory->define(Permiso::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'slug' => $faker->word,
    ];
});
