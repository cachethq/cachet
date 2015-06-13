<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers;

use GrahamCampbell\Binput\Facades\Binput;
use GrahamCampbell\Throttle\Facades\Throttle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use PragmaRX\Google2FA\Vendor\Laravel\Facade as Google2FA;

/**
 * Logs users into their account.
 */
class AuthController extends AbstractController
{
    /**
     * Shows the login view.
     *
     * @return \Illuminate\View\View
     */
    public function showLogin()
    {
        return View::make('auth.login')->with([
            'pageTitle' => trans('dashboard.login.login'),
        ]);
    }

    /**
     * Logs the user in.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin()
    {
        $loginData = Binput::only(['email', 'password']);
        // Validate login credentials.
        if (Auth::validate($loginData)) {
            // Log the user in for one request.
            Auth::once($loginData);
            // Do we have Two Factor Auth enabled?
            if (Auth::user()->hasTwoFactor) {
                // Temporarily store the user.
                Session::put('2fa_id', Auth::user()->id);

                return Redirect::route('two-factor');
            }

            // We probably wan't to add support for "Remember me" here.
            Auth::attempt(Binput::only(['email', 'password']));

            segment_track('Logged In');

            return Redirect::intended('dashboard');
        }

        Throttle::hit(Request::instance(), 10, 10);

        return Redirect::back()
            ->withInput(Binput::except('password'))
            ->with('error', trans('forms.login.invalid'));
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postTwoFactor()
    {
        // Check that we have a session.
        if ($userId = Session::pull('2fa_id')) {
            $code = Binput::get('code');

            // Maybe a temp login here.
            Auth::loginUsingId($userId);

            $valid = Google2FA::verifyKey(Auth::user()->google_2fa_secret, $code);

            if ($valid) {
                return Redirect::intended('dashboard');
            } else {
                // Failed login, log back out.
                Auth::logout();

                return Redirect::route('login')->with('error', trans('forms.login.invalid-token'));
            }
        }

        return Redirect::route('login')->with('error', trans('forms.login.invalid-token'));
    }

    /**
     * Logs the user out, deleting their session etc.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logoutAction()
    {
        Auth::logout();

        segment_track('Logged Out');

        return Redirect::to('/');
    }
}
