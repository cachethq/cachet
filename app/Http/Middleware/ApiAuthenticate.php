<?php

namespace CachetHQ\Cachet\Http\Middleware;

use CachetHQ\Cachet\Models\User;
use Closure;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ApiAuthenticate
{
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
                User::findByApiToken($apiToken);
            } catch (ModelNotFoundException $e) {
                return response()->json([
                    'message'     => 'The API token you provided was not correct.',
                    'status_code' => 401,
                ], 401);
            }
        } else {
            return response()->json([
                'message'     => 'You are not authorized to view this content.',
                'status_code' => 401,
            ], 401);
        }

        return $next($request);
    }
}
