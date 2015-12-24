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
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ApiAuthentication
{
    /**
     * The authentication guard instance.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new api authentication middleware instance.
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
     * @param bool                     $required
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $required = false)
    {
        if ($this->auth->guest()) {
            if ($apiToken = $request->header('X-Cachet-Token')) {
                try {
                    $this->auth->onceUsingId(User::findByApiToken($apiToken)->id);
                } catch (ModelNotFoundException $e) {
                    if ($required) {
                        throw new HttpException(401);
                    }
                }
            } elseif ($required) {
                throw new HttpException(401);
            }
        }

        return $next($request);
    }
}
