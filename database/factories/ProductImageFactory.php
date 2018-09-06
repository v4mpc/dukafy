<?php

use Faker\Generator as Faker;

$factory->define(App\ProductImage::class, function (Faker $faker) {
    $products = App\Product::pluck('id')->toArray();
    return [
        'product_id'=>$faker->randomElement($products),
        'image'=> $faker->file(public_path('template1/source'), public_path('template1/destination'),false),
 
    ];
});
