<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    $categories = App\Category::pluck('id')->toArray();
    return [
        //
        'name'=>$faker->lastName,
        'price'=>$faker->numberBetween($min = 1000, $max = 900000),
        'price_visibility'=>$faker->boolean,
        'category_id'=>$faker->randomElement($categories),
        'description'=>$faker->catchPhrase,
        'featured'=>$faker->boolean,
        'discount'=>$faker->numberBetween($min=0,$max=90),

    ];
});
