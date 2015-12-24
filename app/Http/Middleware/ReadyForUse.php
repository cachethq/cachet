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

use CachetHQ\Cachet\Facades\Setting;
use Closure;
use Exception;
use Illuminate\Support\Facades\Redirect;

class ReadyForUse
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {
            if (!Setting::get('app_name')) {
                return Redirect::to('setup');
            }
        } catch (Exception $e) {
            return Redirect::to('setup');
        }

        return $next($request);
    }
}
