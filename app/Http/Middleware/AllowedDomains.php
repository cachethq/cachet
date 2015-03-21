<?php

namespace CachetHQ\Cachet\Http\Middleware;

use CachetHQ\Cachet\Facades\Setting;
use Closure;

class AllowedDomains
{
    /**
     * Run the allowed domains middleware.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

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
