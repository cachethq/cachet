<?php

namespace CachetHQ\Cachet\Http\After;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Symfony\Component\HttpFoundation\Response;

class SslFixFilter
{
    /**
     * Run the SSL filter.
     *
     * @param \Illuminate\Routing\Route                  $route
     * @param \Illuminate\Http\Request                   $request
     * @param \Symfony\Component\HttpFoundation\Response $response
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function filter(Route $route, Request $request, Response $response)
    {
        $output = $response->getOriginalContent();
        $output = str_replace('action="http://', 'action="//', $output);

        $response->setContent($output);
    }
}
