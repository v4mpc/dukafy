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
}
