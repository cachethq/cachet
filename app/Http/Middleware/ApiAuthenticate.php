<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Middleware;

use CachetHQ\Cachet\Models\User;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ApiAuthenticate
{
    /**
     * The Guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
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
        if ($apiToken = $request->header('X-Cachet-Token')) {
            try {
                $user = User::findByApiToken($apiToken);

                $this->auth->onceUsingId($user->id);
            } catch (ModelNotFoundException $e) {
                return response()->json([
                    'message'     => 'The API token you provided was not correct.',
                    'status_code' => 401,
                ], 401);
            }
        } elseif ($user = $request->getUser()) {
            $this->auth->onceBasic();
        } else {
            return response()->json([
                'message'     => 'You are not authorized to view this content.',
                'status_code' => 401,
            ], 401);
        }

        return $next($request);
    }
}
