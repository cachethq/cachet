<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Middleware;

use Closure;
use GrahamCampbell\Throttle\Facades\Throttle;
use Illuminate\Support\Facades\Redirect;

class LoginThrottling
{
    /**
     * Run the login throttling middleware.
     *
     * We're verifying that the user is not attempting to brute force Cachet's
     * login system. If the user has reached the rate limit, then we're sending
     * them away, otherwise, we do nothing, and allow them to continue.
     *
     * Note that this filter is not responsible for incrementing the hit count.
     * Another part of Cachet will increment the hit count for the given route
     * only if validation passes, and the user did not successfully login.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Throttle::check($request, 10, 10)) {
            return Redirect::back()->with('error', 'You have made too many login requests.');
        }

        return $next($request);
    }
}
