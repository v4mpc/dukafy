<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Http\Resources\Orders as OrdersResource;
use App\Http\Resources\Order as OrderResource;
use JWTAuth;

class OrderController extends Controller
{
    public function index($account_id)
    {
        return OrdersResource::collection(Order::withoutGlobalScopes()->where('account_id', $account_id)->orderBy('created_at', 'desc')->paginate());
    }

    public function show($account_id, $order_id)
    {
        foreach (JWTAuth::parseToken()->toUser()->unreadNotifications as $notification) {
            if ($notification->data['order_id']==$order_id) {
                $notification->markAsRead();
                break;
            }
        }
        return OrderResource::collection(Order::withoutGlobalScopes()->where('account_id', $account_id)->where('id', $order_id)->get());
    }
}
