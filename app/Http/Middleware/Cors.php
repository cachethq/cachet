<?php

namespace CachetHQ\Cachet\Http\Middleware;

use Closure;

class Cors
{
    /**
     * Run the cors middleware.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }
}
