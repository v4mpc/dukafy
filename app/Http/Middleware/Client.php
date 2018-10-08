<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Client
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
        if (Auth::user()->account_id==1) {
            return redirect()->route('admin/dashboard');
        }
      
        return $next($request);
    }
}
