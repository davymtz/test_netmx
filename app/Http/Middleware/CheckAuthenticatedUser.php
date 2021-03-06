<?php

namespace App\Http\Middleware;

use Closure;

class CheckAuthenticatedUser
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
        if(!$request->session()->exists("ifconnect")) {
            return redirect()->route("login");
        }
        return $next($request);
    }
}
