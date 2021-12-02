<?php

namespace App\Http\Middleware;

use App\Http\Models\HeaderPanel;
use Closure;

class HeaderMiddleware
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
        view()->share(['headerItems' => [
            'headerItems' => HeaderPanel::getHeaderItems(),
        ],
        ]);
        return $next($request);
    }
}
