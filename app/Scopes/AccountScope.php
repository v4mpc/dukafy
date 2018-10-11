<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Account;
// use Illuminate\Http\Request;
use Session;
use Request;

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
        $account_id=Account::where('domain', preg_replace('/\.dukafy/', "", Request::getHost()))->first()->id;
        // dd($account_id);
        $builder->where('account_id', $account_id);
    }
}
