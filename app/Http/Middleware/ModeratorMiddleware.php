<?php

namespace App\Http\Middleware;

use Closure;

class ModeratorMiddleware
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
        if ( session()->get("isModerator", 0) == 0 and session()->get("isAdmin", 0) == 0 ) {
            return redirect('/admin/login');
        }

        return $next($request);
    }
}
