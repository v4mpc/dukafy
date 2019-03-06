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
        $domain=preg_replace('/www\./', "", Request::getHost());
        $domain=preg_replace('/www\./', "", $domain);
        if (Request::is('api/*') || strpos(php_sapi_name(), 'cli') !== false) {
            $builder->where('account_id', '>', 1);
        } else {
            if (Request::getHost()=="adshlits.dukafy.co.tz" ||$domain=='dukafy.co.tz'||$domain=='dukafy.local') {
                $account_id=1;
            } else {
                if (strpos($domain, 'dukafy')!==false) {
                    $domain_array=explode('.', $domain);
                    $subdomain=$domain_array[0];
                    $account_id=Account::where('subdomain', $subdomain)->first()->id;
                } else {
                    
                    $account_id=Account::where('domain', $domain)->first()->id;
                    
                }
            }
            $builder->where('account_id', $account_id);
        }
    }
}
