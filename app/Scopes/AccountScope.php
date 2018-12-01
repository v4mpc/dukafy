<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Account;
// use Illuminate\Http\Request;
use Session;
use Request;
use Route;

class AccountScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */

   

    public function apply(Builder $builder, Model $model)
    {
        

        //lets check if request if from mobile
        //if its from mobile
        //we make we only check if its account id is greater than 1
       
        // dd(Request::getHost());
        if (Request::is('api/*') || strpos(php_sapi_name(), 'cli') !== false) {
            // dd('its an api');
            $builder->where('account_id', '>', 1);
        } else {
            // dd('dfd');
            if (Request::getHost()=="adshlits.dukafy.co.tz") {
                $account_id=1;
            } else {
                $account_id=Account::where('domain', preg_replace('/\.dukafy/', "", Request::getHost()))->first()->id;
            }
            $builder->where('account_id', $account_id);
        }
    }
}
