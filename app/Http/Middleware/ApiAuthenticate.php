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

use CachetHQ\Cachet\Models\User;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class ApiAuthenticate
{
    /**
     * The authentication guard instance.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new api authenticate middleware instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard $auth
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
    public function handle($request, Closure $next)
    {
        if ($this->auth->guest()) {
            if ($apiToken = $request->header('X-Cachet-Token')) {
                try {
                    $this->auth->onceUsingId(User::findByApiToken($apiToken)->id);
                } catch (ModelNotFoundException $e) {
                    throw new UnauthorizedHttpException();
                }
            } elseif ($request->getUser()) {
                if ($this->auth->onceBasic() !== null) {
                    throw new AccessDeniedHttpException();
                }
            } else {
                throw new AccessDeniedHttpException();
            }
        }

        return $next($request);
    }
}
