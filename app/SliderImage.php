<?php

namespace App;

use App\Scopes\AccountScope;

use Illuminate\Database\Eloquent\Model;

class SliderImage extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new AccountScope);
    }
}
