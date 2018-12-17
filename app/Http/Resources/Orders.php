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
        // dd($request->user_id);
        return[
            'id'=>$this->id,
            'number'=>$this->number,
            'customer_name'=>$this->customer->first_name,
            'products'=>count($this->products),
            'amount'=>number_format($this->totalCost()),
            'time'=>$this->created_at->diffForHumans(),
            'read'=>$this->readOrder($request->user_id),

            
        ];
    }
}
