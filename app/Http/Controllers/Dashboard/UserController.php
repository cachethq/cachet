<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Dashboard;

use AltThree\Validator\ValidationException;
use CachetHQ\Cachet\Models\User;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use PragmaRX\Google2FA\Vendor\Laravel\Facade as Google2FA;

class UserController extends Controller
{
    /**
     * Shows the user view.
     *
     * @return \Illuminate\View\View
     */
    public function showUser()
    {
        return View::make('dashboard.user.index')
            ->withPageTitle(trans('dashboard.team.profile').' - '.trans('dashboard.dashboard'));
    }

    /**
     * Updates the current user.
     *
     * @return \Illuminate\View\View
     */
    public function postUser()
    {
        $userData = array_filter(Binput::only([
            'username',
            'email',
            'password',
            'google2fa',
        ]));

        $enable2FA = (bool) array_pull($userData, 'google2fa');

        // Let's enable/disable auth
        if ($enable2FA && !Auth::user()->hasTwoFactor) {
            $userData['google_2fa_secret'] = Google2FA::generateSecretKey();
        } elseif (!$enable2FA) {
            $userData['google_2fa_secret'] = '';
        }

        try {
            Auth::user()->update($userData);
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.user')
                ->withInput($userData)
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.team.edit.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.user')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.team.edit.success')));
    }

    /**
     * Regenerates the users API key.
     *
     * @return \Illuminate\View\View
     */
    public function regenerateApiKey(User $user)
    {
        $user->api_key = User::generateApiKey();
        $user->save();

        return Redirect::route('dashboard.user');
    }
}
