<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
        } else {
            $response->headers->set('Access-Control-Allow-Origin', getenv('APP_URL'));
        }

        return $response;
    }
}
