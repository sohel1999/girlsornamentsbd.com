<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id'=>factory(\App\Models\Category::class)->create()->id,
        'brand_id'=>factory(\App\Models\Brand::class)->create()->id,
        'name'=>$faker->name,
        'description'=>$faker->realText(),
        'price'=>rand(100,1000),
        'stock'=>rand(1,100),
        'images'=>json_encode([$faker->imageUrl()]),
        'status'=>$faker->boolean
    ];
});
