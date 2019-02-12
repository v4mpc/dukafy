<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use App\Scopes\AccountScope;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use SearchableTrait;
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'products.name' => 10,
            'products.description' => 9,
            'products.price' => 2,
        ],
    
    ];



    public function images()
    {
        return $this->hasMany('App\ProductImage');
    }

    public function variations()
    {
        return $this->hasMany('App\ProductVariation');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function subCategory()
    {
        return $this->belongsTo('App\SubCategory');
    }

    public function presentPrice()
    {
        return (money_format('%i', $this->price));
    }

    public function presentDiscount()
    {
        $deduct_amount=($this->discount*$this->price)/100;
        $new_price=$this->price-$deduct_amount;

        // // return money_format('%i',$new_price);

        return round($new_price);
        // return '345435345345345';
    }

    public function percentageDiscount()
    {
        if ($this->discount) {
            # code...
            return round((($this->discount)/($this->price))*100);
        }

        return 0;
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order')->withPivot('quantity');
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new AccountScope);
    }

    public function get_image($index=0)
    {
        if ($index<=count($this->images)-1||$index==0) {
            return 'data:image/png;base64,' . base64_encode(file_get_contents(asset('images/'.$this->images[$index]->image))); # code...
        }
    }


    public function images_api()
    {
        $images_array=$this->images->map(function ($item, $key) {
            return 'data:image/png;base64,' . base64_encode(file_get_contents(asset('images/'.$item->image)));
        })->toArray();

        return $images_array;
    }


    public function get_size()
    {
        $sum=0;
        foreach ($this->images as $key=>$image) {
            $sum+=ceil((strlen($this->get_image($key))/1.37)/1024);
        }
        return $sum;
    }

    public function images_json_encoded()
    {
        $images=[];
        foreach ($this->images as $key=>$image) {
            // $images[]=asset('images/'.$image->image);
            $images[]=$this->get_image($key);
        }
        return json_encode($images);
    }


    public function selling_price()
    {
        $product_price=$this->price;
        if ($this->discount) {
            $product_price=$this->price-$this->discount;
        }

        return $product_price;
    }

    public function imageArray()
    {
        $images_array=$this->images->map(function ($item, $key) {
            return $item->image;
        })->toArray();

        return $images_array;
    }

    public function get_first_image()
    {
        return asset('images/'.$this->images[0]->image);
    }

    public function currency()
    {
        return $this->account->settings->currency->name;
    }

    public function account()
    {
        return $this->belongsTo('App\Account');
    }
}
