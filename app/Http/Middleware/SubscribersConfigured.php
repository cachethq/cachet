<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Middleware;

use CachetHQ\Cachet\Facades\Setting;
use Closure;
use Illuminate\Support\Facades\Redirect;

class SubscribersConfigured
{
    /**
     * We're verifying that subscribers is both enabled and configured.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $isEnabled = Setting::get('enable_subscribers', false);
        $mailAddress = env('MAIL_ADDRESS', false);
        $mailFrom = env('MAIL_NAME', false);

        if (!($isEnabled && $mailAddress && $mailFrom)) {
            return Redirect::route('status-page');
        }

        return $next($request);
    }
}
