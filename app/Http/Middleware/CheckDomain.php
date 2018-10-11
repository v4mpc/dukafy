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
        $account=Account::where('domain', preg_replace('/\.dukafy/', "", $request->getHost()))->first();
        
        if ($account) {
            session(['accoun_id'=>$account->id]);

            // dd(session('accoun_id'));
            return $next($request);
        }

        return abort(404);
    }
}
