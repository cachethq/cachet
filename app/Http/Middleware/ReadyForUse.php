<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

/**
 * This is the ready for use middleware class.
 *
 * @author Graham Campbell <james@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 * @author Joseph Cohen <joe@alt-three.com>
 */
class ReadyForUse
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            if (!Config::get('setting.app_name')) {
                return Redirect::to('setup');
            }
        } catch (Exception $e) {
            return Redirect::to('setup');
        }

        return $next($request);
    }
}
