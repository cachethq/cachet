<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Admin;

use CachetHQ\Cachet\Http\Controllers\AbstractController;
use CachetHQ\Cachet\Models\User;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use PragmaRX\Google2FA\Vendor\Laravel\Facade as Google2FA;

class UserController extends AbstractController
{
    /**
     * Shows the user view.
     *
     * @return \Illuminate\View\View
     */
    public function showUser()
    {
        return View::make('dashboard.user.index')->with([
            'pageTitle' => trans('dashboard.team.profile').' - '.trans('dashboard.dashboard'),
        ]);
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

            segment_track('User Management', [
                'event' => 'enabled_two_factor',
                'value' => true,
            ]);
        } elseif (!$enable2FA) {
            $items['google_2fa_secret'] = '';

            segment_track('User Management', [
                'event' => 'enabled_two_factor',
                'value' => false,
            ]);
        }

        if (trim($passwordChange) === '') {
            unset($items['password']);
        }

        $user = Auth::user();
        $user->update($items);

        if (!$user->isValid()) {
            return Redirect::back()->withInput(Binput::except('password'))
                ->with('title', sprintf(
                    '%s %s',
                    trans('dashboard.notifications.whoops'),
                    trans('dashboard.team.edit.failure')
                ))
                ->with('errors', $user->getErrors());
        }

        $successMsg = sprintf(
            '%s %s',
            trans('dashboard.notifications.awesome'),
            trans('dashboard.team.edit.success')
        );

        return Redirect::back()->with('success', $successMsg);
    }

    /**
     * Regenerates the users API key.
     *
     * @return \Illuminate\View\View
     */
    public function regenerateApiKey(User $user)
    {
        segment_track('User Management', [
            'event' => 'regenrated_api_token',
        ]);

        $user->api_key = User::generateApiKey();
        $user->save();

        return Redirect::back();
    }
}
