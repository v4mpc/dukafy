<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    


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
        return (money_format('%i',$this->price));
    }

    public function presentDiscount()
    {
        
        $deduct_amount=($this->discount*$this->price)/100;
        $new_price=$this->price-$deduct_amount;

        // // return money_format('%i',$new_price);

         return round($new_price);
        // return '345435345345345';
    }

    public function orders()
    {           
        return $this->belongsToMany('App\Order')->withPivot('quantity');
    }
}
