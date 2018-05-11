<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products()
    {           
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function totalCost(){
        $sum=0;
        foreach ($this->products as $product) {
            $sum+=$product->pivot->quantity*$product->price;
        }

        return $sum;

    }

    public function getStatusAttribute($value)
    {
        return ucfirst($value);
    }
}
