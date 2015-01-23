<?php

namespace CachetHQ\Cachet\Http\Before;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class AdminFilter
{
    /**
     * Run the auth filter.
     *
     * We're verifying that the current user is logged in to Cachet and is an admin level.
     *
     * @param \Illuminate\Routing\Route $route
     * @param \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response|null
     */
    public function filter(Route $route, Request $request)
    {
        if (!Auth::check() || (Auth::check() && !Auth::user()->isAdmin)) {
            return Response::view('errors.401', ['pageTitle' => trans('errors.unauthorized.title')], 401);
        }
    }
}
