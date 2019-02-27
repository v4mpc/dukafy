<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\ProductImage;

class Product extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'price_visibility'=>$this->price_visibility,
            'price'=>number_format($this->selling_price()).' '.$this->currency(),
            'category'=>$this->category->name,
            'images'=>$this->images_api(),
            'out_stock'=>$this->out_stock,
            'featured'=>$this->featured,
            'discount'=>$this->percentageDiscount(),
            'description'=>$this->description

        ];
    }
}
