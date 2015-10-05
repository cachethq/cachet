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
use Illuminate\Support\Facades\Redirect;

class AppIsSetup
{
    /**
     * Run the app is setup middleware.
     *
     * We're verifying that Cachet is correctly setup. If it is, then we're
     * redirecting the user to the dashboard so they can use Cachet.
     *
     * @param \Illuminate\Routing\Route $route
     * @param \Closure                  $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Setting::get('app_name')) {
            return Redirect::to('dashboard');
        }

        return $next($request);
    }
}
