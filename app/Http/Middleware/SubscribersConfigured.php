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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

/**
 * This is the subscribers configured middleware class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <james@alt-three.com>
 */
class SubscribersConfigured
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!subscribers_enabled()) {
            return Redirect::route('status-page');
        }

        return $next($request);
    }
}
