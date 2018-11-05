<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Orders extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id'=>$this->id,
            'customer_name'=>$this->customer->first_name." ".$this->customer->last_name,
            'products'=>count($this->products),
            'amount'=>number_format($this->totalCost()),
            'time'=>$this->created_at->diffForHumans()
        ];
    }
}
