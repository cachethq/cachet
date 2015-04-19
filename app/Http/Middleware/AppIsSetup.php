<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Middleware;

use CachetHQ\Cachet\Models\Setting;
use Closure;
use Exception;
use Illuminate\Support\Facades\Redirect;

class AppIsSetup
{
    /**
     * Run the is setup filter.
     *
     * We're verifying that Cachet is correctly setup. If it is, they we're
     * sending the user to the dashboard so they can use Cachet.
     *
     * @param \Illuminate\Routing\Route $route
     * @param \Closure                  $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {
            $setting = Setting::where('name', 'app_name')->first();
            if ($setting && $setting->value) {
                return Redirect::route('dashboard');
            }
        } catch (Exception $e) {
            // do nothing
        }

        return $next($request);
    }
}
