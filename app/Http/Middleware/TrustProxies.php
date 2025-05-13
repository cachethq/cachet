<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Middleware\TrustProxies as LaravelTrustProxies;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrustProxies extends LaravelTrustProxies
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (config('cachet.trusted_proxies')) {
            LaravelTrustProxies::at(explode(',', config('cachet.trusted_proxies')));
        }

        return parent::handle($request, $next);
    }
}
