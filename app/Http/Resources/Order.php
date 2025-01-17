<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\OrderProductResource;

class Order extends Resource
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
            'id'=>$this->number,
            'customer_name'=>$this->customer->first_name,
            'customer_email'=>$this->customer->email,
            'customer_phone'=>$this->customer->phone,
            'customer_address'=>$this->customer->address,
            'products'=>OrderProduct::collection($this->products),
            'customer_comment'=>$this->customer->comment,
            // 'time'=>$this->created_at->diffForHumans(),
            'time'=>$this->created_at->toFormattedDateString().' | '.$this->created_at->toTimeString(),
            'total'=>number_format($this->totalCost()).' '.$this->currency()
        ];
    }
}
