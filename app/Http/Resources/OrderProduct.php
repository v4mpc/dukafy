<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class OrderProduct extends Resource
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
           
            'name'=>$this->name,
            'price'=>number_format($this->selling_price()),
            'quantity'=>$this->pivot->quantity,
            'amount'=>number_format($this->pivot->quantity*$this->selling_price())

        ];
    }
}
