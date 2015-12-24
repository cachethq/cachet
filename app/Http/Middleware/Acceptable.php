<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Middleware;

use Closure;
use Symfony\Component\HttpKernel\Exception\NotAcceptableHttpException;

class Acceptable
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @param string|null              $type
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $type = null)
    {
        if (!$request->accepts($type ?: 'accept:application/json')) {
            throw new NotAcceptableHttpException();
        }

        return $next($request);
    }
}
