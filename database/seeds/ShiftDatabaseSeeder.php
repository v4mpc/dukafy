<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;

// use DB;

class ShiftDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #demo account_id=5
        #category
        #name
        #account_id
        #product
        #name
        #price
        #price_visibility
        #description
        #out-stock
        #featured
        #discount
        #account_id
        #product_images
        #product_id
        #image

        #first lets fetch some categories from old database
        $categories=DB::connection('mysql1')->table('categories', 'id')->select('name')->get();

        #then the products
        $products=DB::connection('mysql1')->table('products')->select('id', 'name', 'price', 'price_visibility', 'description', 'out_stock', 'featured', 'discount', 'category_id')->get();
        #finaly the images
        $product_images=DB::connection('mysql1')->table('product_images')->select('id', 'product_id', 'image')->get();
        foreach ($categories as $category) {
            $cat=new Category;
            $cat->name=$category->name;
            $cat->account_id=5;
            $cat->save();
            foreach ($products as $product) {
                if ($category->id==$product->category_id) {
                    $prod = new Product;
                    $prod->name=$product->name;
                    $prod->price=$product->price;
                    $prod->price_visibility=$product->price_visibility;
                    $prod->description=$product->description;
                    $prod->out_stock=$product->out_stock;
                    $prod->featured=$product->featured;
                    $prod->discount=$product->discount;
                    $prod->category_id=$cat->id;
                    $prod->account_id=5;
                    $prod->save();
                    foreach ($product_images as $image) {
                        if ($product->id==$image->product_id) {
                            $img=new ProductImage;
                            $img->product_id=$prod->id;
                            $img->image=$image->$image;
                            $img->save();
                        }
                    }
                }
            }
        }
    }
}
