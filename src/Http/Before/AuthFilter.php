<?php

namespace CachetHQ\Cachet\Http\Before;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;

class AuthFilter
{
    public function filter(Route $route, Request $request)
    {
        if (Auth::guest()) {
            if ($request->ajax()) {
                return Response::make('Unauthorized', 401);
            } else {
                return Redirect::guest('auth/login');
            }
        }
    }
}
