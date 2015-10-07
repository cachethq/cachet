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

class Timezone
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @param string                   $type
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($tz = $request->header('Time-Zone')) {
            app('config')->set('app.timezone', $tz);
        }

        return $next($request);
    }
}
