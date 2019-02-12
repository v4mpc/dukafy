<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\Category as CategoryResource;
use App\Category;

class Products extends Resource
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
            'price'=>number_format($this->price).' '.$this->currency(),
            'category'=>$this->category->name,
            'image'=>$this->get_first_image(),
            'out_stock'=>$this->out_stock,
            'featured'=>$this->featured,
            'discount'=>$this->percentageDiscount()

        ];
    }
}
