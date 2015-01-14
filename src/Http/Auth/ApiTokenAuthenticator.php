<?php

namespace CachetHQ\Cachet\Http\Auth;

use CachetHQ\Cachet\Models\User;
use Dingo\Api\Auth\AuthorizationProvider;
use Dingo\Api\Routing\Route;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class ApiTokenAuthenticator extends AuthorizationProvider
{
    /**
     * Authenticate the request and return the authenticated user instance.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Dingo\Api\Routing\Route $route
     *
     * @throws \Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException
     *
     * @return \CachetHQ\Cachet\Models\User
     */
    public function authenticate(Request $request, Route $route)
    {
        if ($apiToken = $request->header('X-Cachet-Token')) {
            try {
                return User::findByApiToken($apiToken);
            } catch (ModelNotFoundException $e) {
                throw new UnauthorizedHttpException(null, 'The API token you provided was not correct.');
            }
        }

        throw new UnauthorizedHttpException(null, 'You are not authorized to view this content.');
    }

    /**
     * Get the providers authorization method.
     *
     * @return string
     */
    public function getAuthorizationMethod()
    {
        return 'api_token';
    }
}
