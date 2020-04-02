<?php

namespace App\Http\Middleware;

use Closure;
use App\Account;
use Session;

class CheckDomain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->is('api/*')&&$request->getHost()!="dukafy.co.tz"&&$request->getHost()!='www.dukafy.co.tz') {
            $account=0;
            if ($request->getHost()!="adshlits.dukafy.co.tz") {
                $account=Account::where('id', getAccountId($request))->first();
            }
            if ($account || $request->getHost()=="adshlits.dukafy.co.tz") {
                // dd($account);

                return $next($request);
            }
            return abort(404);
        }
        return $next($request);
    }
}
