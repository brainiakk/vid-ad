<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperAdminAuthenticated​
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
//        return $next($request);
        if (Auth::user()->user_type == "super_admin") { // if the current role is Administrator
            return $next($request);
        }
        abort(403, "Cannot access to restricted page");

    }
}
