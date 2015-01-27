<?php

namespace CachetHQ\Cachet\Http\After;

use CachetHQ\Cachet\Facades\Setting;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Symfony\Component\HttpFoundation\Response;

class AllowedDomainsFilter
{
    /**
     * Run the allowed domains filter.
     *
     * @param \Illuminate\Routing\Route                  $route
     * @param \Illuminate\Http\Request                   $request
     * @param \Symfony\Component\HttpFoundation\Response $response
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function filter(Route $route, Request $request, Response $response)
    {
        // Always allow our own domain.
        $ourDomain = Setting::get('app_domain');
        $response->headers->set('Access-Control-Allow-Origin', $ourDomain);

        // Should we allow anyone else?
        if ($allowedDomains = Setting::get('allowed_domains')) {
            $domains = explode(',', $allowedDomains);
            foreach ($domains as $domain) {
                $response->headers->set('Access-Control-Allow-Origin', $domain);
            }
        }

        return $response;
    }
}
