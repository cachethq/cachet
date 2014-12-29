<?php

class LoginThrottlingFilter
{
    public function filter($route, $request, $response)
    {
        // check if we've reached the rate limit, but don't hit the throttle yet
        // we can hit the throttle later on in the if validation passes
        if (!Throttle::check($request, 10, 10)) {
            return Redirect::back()
                ->with('error', 'You have made too many login requests.');
        }

        return $response;
    }
}
