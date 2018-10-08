<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $dates = ['ended_at','started_at'];
    
    public function package()
    {
        return $this->belongsTo('App\Package');
    }

    public function subscription()
    {
        return $this->belongsTo('App\Subscription');
    }
}
