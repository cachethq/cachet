<?php

namespace CachetHQ\Cachet\Auth;

use CachetHQ\Cachet\Models\User;
use Dingo\Api\Auth\AuthorizationProvider;
use Dingo\Api\Routing\Route;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class ApiKeyAuthenticator extends AuthorizationProvider
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
        $api_key = $request->input('api_key', false);

        if ($api_key === false) {
            throw new UnauthorizedHttpException(null, 'You did not provide an API key.');
        }

        try {
            return User::findByApiKey($api_key);
        } catch (ModelNotFoundException $e) {
            throw new UnauthorizedHttpException(null, 'The API key you provided was not correct.');
        }
    }

    /**
     * Get the providers authorization method.
     *
     * @return string
     */
    public function getAuthorizationMethod()
    {
        return 'api_key';
    }
}
