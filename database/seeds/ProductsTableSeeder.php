<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Product::class,100)->create();
        $products = Product::all();
        foreach ($products as $product) {
            if ($product->discount) {
                if ($product->discount<100) {
                    # convert percentage to amoount
                    $discount = round(($product->discount*$product->price)/100);
                    $product->discount=$discount;
                    $product->save();
                }
            }
        }
    }
}
