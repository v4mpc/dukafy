<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $dates = ['ended_at','started_at'];
    
    public function package()
    {
        return $this->belongsTo('App\Package');
    }

    public function subscription()
    {
        return $this->belongsTo('App\Subscription');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function totalSales()
    {
        $sales=0;
        
        foreach ($this->orders as $order) {
            $sales+=$order->totalCost();
        }
        return $sales;
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }


    public function topProducts()
    {
        $products=[];
        foreach ($this->orders as $order) {
            foreach ($order->products as $product) {
                if (array_key_exists($product->id, $products)) {
                    $products[$product->id]+=$product[$product->id];
                } else {
                    $products[$product->id]=0;
                }
            }
        }
        arsort($products);

        $products=array_slice($products, 0, 9, true);


        return array_keys($products);
    }
}
