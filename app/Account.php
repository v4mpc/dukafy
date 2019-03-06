<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;

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

    public function orderCount()
    {
        return count($this->orders);
    }

    public function settings()
    {
        return $this->hasOne('App\Setting');
    }

    public function totalProducts()
    {
        return count($this->products);
    }

    public function requiredProducts()
    {
        return $this->package->product;
    }

    public function isMaxProduct()
    {
        return $this->requiredProducts()>$this->totalProducts();
    }
    public function hasExpired()
    {
        return Carbon::now()->gt($this->ended_at);
    }

    public function formatNumber()
    {
        return $this->phone;
    }

    public function unreadNotification()
    {
    }


    public function slideImages()
    {
        return $this->hasMany('App\SliderImage');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function totalSubcriptionAmount()
    {
        if ($this->subscription->subscription==3) {
            return number_format($this->subscription->subscription*$this->package->price);
        } elseif ($this->subscription->subscription==12) {
            return number_format($this->subscription->subscription*($this->package->price-6000));
        }
    }

    public function currency()
    {
        return $this->settings->currency->name;
    }
}
