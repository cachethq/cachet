<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Bus\Events\User\UserFailedTwoAuthEvent;
use CachetHQ\Cachet\Bus\Events\User\UserLoggedInEvent;
use CachetHQ\Cachet\Bus\Events\User\UserLoggedOutEvent;
use CachetHQ\Cachet\Bus\Events\User\UserPassedTwoAuthEvent;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use PragmaRX\Google2FA\Google2FA;

class AuthController extends Controller
{
    /**
     * Shows the login view.
     *
     * @return \Illuminate\View\View
     */
    public function showLogin()
    {
        return View::make('auth.login')
            ->withPageTitle(trans('dashboard.login.login'));
    }

    /**
     * Logs the user in.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin()
    {
        $loginData = Binput::only(['username', 'password', 'remember_me']);

        // Login with username or email.
        $loginKey = filter_var($loginData['username'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $loginData[$loginKey] = Arr::pull($loginData, 'username');

        $rememberUser = Arr::pull($loginData, 'remember_me') === '1';

        // Validate login credentials.
        if (Auth::validate($loginData)) {
            Auth::once($loginData);

            if (Auth::user()->hasTwoFactor) {
                Session::put('2fa_id', Auth::user()->id);

                return cachet_redirect('auth.two-factor');
            }

            Auth::attempt($loginData, $rememberUser);

            event(new UserLoggedInEvent(Auth::user()));

            return Redirect::intended(cachet_route('dashboard'));
        }

        return cachet_redirect('auth.login')
            ->withInput(Binput::except('password'))
            ->withError(trans('forms.login.invalid'));
    }

    /**
     * Shows the two-factor-auth view.
     *
     * @return \Illuminate\View\View
     */
    public function showTwoFactorAuth()
    {
        return View::make('auth.two-factor-auth');
    }

    /**
     * Validates the Two Factor token.
     *
     * This feels very hacky, but we have to juggle authentication and codes.
     *
     * @throws \PragmaRX\Google2FA\Exceptions\IncompatibleWithGoogleAuthenticatorException
     * @throws \PragmaRX\Google2FA\Exceptions\InvalidCharactersException
     * @throws \PragmaRX\Google2FA\Exceptions\SecretKeyTooShortException
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postTwoFactor()
    {
        // Check that we have a session.
        if ($userId = Session::pull('2fa_id')) {
            $code = str_replace(' ', '', Binput::get('code'));

            // Maybe a temp login here.
            Auth::loginUsingId($userId);

            $user = Auth::user();

            $google2fa = new Google2FA();
            $valid = $google2fa->verifyKey($user->google_2fa_secret, $code);

            if ($valid) {
                event(new UserPassedTwoAuthEvent($user));

                event(new UserLoggedInEvent($user));

                return Redirect::intended('dashboard');
            } else {
                event(new UserFailedTwoAuthEvent($user));

                // Failed login, log back out.
                Auth::logout();

                return cachet_redirect('auth.login')->withError(trans('forms.login.invalid-token'));
            }
        }

        return cachet_redirect('auth.login')->withError(trans('forms.login.invalid-token'));
    }

    /**
     * Logs the user out, deleting their session etc.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logoutAction()
    {
        event(new UserLoggedOutEvent(Auth::user()));

        Auth::logout();

        return cachet_redirect('status-page');
    }
}
