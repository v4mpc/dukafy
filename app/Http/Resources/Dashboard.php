<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\Products;
use App\Product;
use Carbon;
use JWTAuth;

class Dashboard extends Resource
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

            'current_products'=>count($this->products),
            'max_products'=>number_format($this->package->product),
            'top_products'=>Products::collection(Product::whereIn('id', $this->topProducts())->where('account_id', $this->id)->get()),
            'total_sales'=>number_format($this->totalSales()),
            'next_due'=>$this->ended_at->diffForHumans(),
            'package_name'=>$this->package->name,
            'order_count'=>$this->orderCount(),
            'name'=>$this->name,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'currency'=>$this->currency(),
            'percentage'=>round((count($this->products)/$this->package->product)*100),
            'store_domain'=>$this->domain,
            'dashboard_domain'=>'demostore.dukafy.co.tz/login',
            'status'=>$this->status,
            'elapsed'=>$this->started_at->diffInDays(Carbon::now()),
            'eta'=>$this->ended_at->diffInDays(Carbon::now()),
            'started_at'=>$this->started_at->toFormattedDateString(),
            'ended_at'=>$this->ended_at->toFormattedDateString(),

        ];
    }
}
