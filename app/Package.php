<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function subscriptions()
    {
        return $this->hasMany('App\Subscription');
    }
}
