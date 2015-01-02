<?php

namespace CachetHQ\Cachet\Http\After;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Symfony\Component\HttpFoundation\Response;

class CorsFilter
{
    /**
     * Run the cors filter.
     *
     * @param \Illuminate\Routing\Route                  $route
     * @param \Illuminate\Http\Request                   $request
     * @param \Symfony\Component\HttpFoundation\Response $response
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function filter(Route $route, Request $request, Response $response)
    {
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }
}
