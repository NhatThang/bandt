<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\ProductBrand;
use Faker\Generator as Faker;

$factory->define(ProductBrand::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
