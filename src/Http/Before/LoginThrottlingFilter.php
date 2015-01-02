<?php

namespace CachetHQ\Cachet\Http\Before;

use GrahamCampbell\Throttle\Facades\Throttle;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;

class LoginThrottlingFilter
{
    public function filter(Route $route, Request $request)
    {
        // check if we've reached the rate limit, but don't hit the throttle yet
        // we can hit the throttle later on in the if validation passes
        if (!Throttle::check($request, 10, 10)) {
            return Redirect::back()
                ->with('error', 'You have made too many login requests.');
        }
    }
}
