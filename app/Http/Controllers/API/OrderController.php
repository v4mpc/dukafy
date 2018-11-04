<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Http\Resources\Orders as OrdersResource;

class OrderController extends Controller
{
    public function index($account_id='2')
    {
        return OrdersResource::collection(Order::withoutGlobalScopes()->where('account_id', $account_id)->get());
    }
}
