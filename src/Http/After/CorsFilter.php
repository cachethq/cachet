<?php

namespace CachetHQ\Cachet\Http\After;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Symfony\Component\HttpFoundation\Response;

class CorsFilter
{
    public function filter(Route $route, Request $request, Response $response)
    {
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }
}
