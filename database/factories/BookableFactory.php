<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bookable;
use Illuminate\Support\Arr;
use Faker\Generator as Faker;

$suffix = [
    'Villa',
    'House',
    'Cottaage',
    'Luxury Villas',
    'Cheap house',
    'Rooms',
    'Cheap Rooms',
    'Luxury Rooms',
    'Fancy Rooms'
];

$factory->define(Bookable::class, function (Faker $faker) use ($suffix) {
    return [
        'title' => $faker->city . ' ' . Arr::random($suffix),
        'description' => $faker->text()
    ];
});
