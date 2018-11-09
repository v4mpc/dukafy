<?php

namespace App\Http\Middleware;

use Closure;
use App\Account;

class CheckAccount
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
        if (!$request->is('api/*')) {
            $account=Account::where('domain', preg_replace('/\.dukafy/', "", $request->getHost()))->where('status', 1)->first();
        
            if ($account || $request->getHost()=="adshlits.dukafy.co.tz") {
                return $next($request);
            }
    
            return abort(404);
        }
        
        return redirect()->back();
    }
}
