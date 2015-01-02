<?php

namespace CachetHQ\Cachet\Http\Before;

use GrahamCampbell\Throttle\Facades\Throttle;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;

class LoginThrottlingFilter
{
    /**
     * Run the login throttling filter.
     *
     * We're verifying that the user is not attempting to brute force Cachet's
     * login system. If the user has reached the rate limit, then we're sending
     * them away, otherwise, we do nothing, and allow them to continue.
     *
     * Note that this filter is not responsible for incrementing the hit count.
     * Another part of Cachet will increment the hit count for the given route
     * only if validation passes, and the user did not successfully login.
     *
     * @param \Illuminate\Routing\Route $route
     * @param \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response|null
     */
    public function filter(Route $route, Request $request)
    {
        if (!Throttle::check($request, 10, 10)) {
            return Redirect::back()->with('error', 'You have made too many login requests.');
        }
    }
}
