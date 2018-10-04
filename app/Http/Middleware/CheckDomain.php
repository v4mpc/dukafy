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
        // dd($request->getHost());
        // $account_id=Account::where('domain', $request->getHost())->first()->id;
        // session(['account_id'=>$account_id]);
        // dd(session('account_id'));
        return $next($request);
    }
}
