<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\AccountScope;
use App\User;

class Order extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('quantity')->withTrashed();
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function totalCost()
    {
        $sum=0;
        foreach ($this->products as $product) {
            $sum+=$product->pivot->quantity*$product->selling_price();
        }

        return $sum;
    }

    public function getStatusAttribute($value)
    {
        return ucfirst($value);
    }


    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new AccountScope);
    }

    public function account()
    {
        return $this->belongsTo('App\Account');
    }

    public function currency()
    {
        return $this->account->currency();
    }

    public function readOrder($user_id)
    {
        #get the user
        $user=User::withOutGlobalScopes()->findOrFail($user_id);
        // dd($user->unreadNotifications);
        foreach ($user->unreadNotifications as $notification) {
            if ($notification->type=='App\Notifications\OrderCompleted') {
                if ($notification->data['order_id']==$this->id) {
                    return 0;
                }
            }
        }
        return 1;
    }
}
