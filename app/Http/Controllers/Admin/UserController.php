<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Admin;

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
        $items = Binput::all();

        $passwordChange = array_get($items, 'password');
        $enable2FA = (bool) array_pull($items, 'google2fa');

        // Let's enable/disable auth
        if ($enable2FA && !Auth::user()->hasTwoFactor) {
            $items['google_2fa_secret'] = Google2FA::generateSecretKey();
        } elseif (!$enable2FA) {
            $items['google_2fa_secret'] = '';
        }

        if (trim($passwordChange) === '') {
            unset($items['password']);
        }

        try {
            Auth::user()->update($items);
        } catch (ValidationException $e) {
            return Redirect::back()
                ->withInput(Binput::except('password'))
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.team.edit.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::back()
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

        return Redirect::back();
    }
}
