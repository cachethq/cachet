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

use CachetHQ\Cachet\Models\User;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

class RemoteUserAuthenticate
{
    /**
     * Create a new remote user authenticate instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard $auth
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

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
        if ($remoteUser = $request->server('REMOTE_USER')) {
            $user = User::where('email', '=', $remoteUser)->first();

            if ($user instanceof User && $this->auth->guest()) {
                $this->auth->login($user);
            }
        }

        return $next($request);
    }
}
