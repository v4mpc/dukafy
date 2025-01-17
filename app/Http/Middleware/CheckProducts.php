<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckProducts
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
        if (Auth::user()->account->isMaxProduct() && Auth::user()->account->status) {
            //we have not reached max product we can proceed
            return $next($request);
        }
// dd('test');
        //we have reached max product we are not allowed to go here so go back
        return redirect()->route('home');
    }
}
