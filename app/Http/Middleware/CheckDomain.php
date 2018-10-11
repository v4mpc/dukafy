<?php

namespace App\Http\Middleware;

use Closure;
use App\Account;

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
        dd($request->getHost());
        $account=Account::where('domain', $request->getHost())->first();
        
        if ($account) {
            session(['accoun_id'=>$account->id]);
            return $next($request);
        }

        return abort(404);
    }
}
