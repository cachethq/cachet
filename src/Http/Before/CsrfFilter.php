<?php

namespace CachetHQ\Cachet\Http\Before;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Support\Facades\Session;

class CsrfFilter
{
    /**
     * Run the csrf filter.
     *
     * We're protecting Cachet against cross-site request forgery attacks. If
     * our csrf token in the session does not match the one given sent to us in
     * this request, then we'll bail.
     *
     * @param \Illuminate\Routing\Route $route
     * @param \Illuminate\Http\Request  $request
     *
     * @throws \Illuminate\Session\TokenMismatchException
     *
     * @return void
     */
    public function filter(Route $route, Request $request)
    {
        if (Session::token() !== $request->input('_token')) {
            throw new TokenMismatchException();
        }
    }
}
