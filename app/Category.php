<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\AccountScope;

class Category extends Model
{
    protected $fillable=['name','account_id'];

    public function subCategories()
    {
        return $this->hasMany('App\SubCategory');
    }


    public function products()
    {
        return $this->hasMany('App\Product');
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new AccountScope);
    }
}
