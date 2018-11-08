<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Http\Resources\Orders as OrdersResource;
use App\Http\Resources\Order as OrderResource;

class OrderController extends Controller
{
    public function index($account_id)
    {
        return OrdersResource::collection(Order::withoutGlobalScopes()->where('account_id', $account_id)->get());
    }

    public function show($account_id, $order_id)
    {
        return OrderResource::collection(Order::withoutGlobalScopes()->where('account_id', $account_id)->where('id', $order_id)->get());
    }
}
