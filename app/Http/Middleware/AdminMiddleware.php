<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminMiddleware
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
        $user = Auth::user();
                if($user->role->id!=1)
                {
                    //you can throw a 401 unauthorized error here instead of redirecting back
                    return redirect()->back(); //this redirects all non-admins back to their previous url's
                }
                return $next($request);
    }
}
