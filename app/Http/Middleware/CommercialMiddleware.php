<?php

namespace App\Http\Middleware;

use Closure;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommercialMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth::check() && Auth::user()->role_id == 2){
            return $next($request);
        }
        else {
            return redirect()->route('login');
        }
    }
}
