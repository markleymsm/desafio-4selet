<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuth
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
        if (Auth::guard('api')->check() && $request->user()->type == 1) {
            var_dump($request->user()->type);
            return $next($request);
        } else {
            var_dump($request->user()->type);
            $message = ["message" => "Permission Denied 1"];
            return response($message, 401);
        }
    }
}
