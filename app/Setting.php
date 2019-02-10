<?php

namespace App;

use App\Scopes\AccountScope;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    // public function getAddressAttribute($value)
    // {
    //     return "P O BOX ".$value;
    // }


    // public function getMobileAttribute($value)
    // {
    //     return number_format($value,0, '.', ' ');
    // }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new AccountScope);
    }

    public function currency()
    {
        return $this->belongsTo('App\Currency');
    }


    public function currencyName()
    {
        return $this->currency->name;
    }
}
