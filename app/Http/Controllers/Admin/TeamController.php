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
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class TeamController extends AbstractController
{
    /**
     * Shows the team members view.
     *
     * @return \Illuminate\View\View
     */
    public function showTeamView()
    {
        $team = User::all();

        return View::make('dashboard.team.index')->with([
            'pageTitle'   => trans('dashboard.team.team').' - '.trans('dashboard.dashboard'),
            'teamMembers' => $team,
        ]);
    }

    /**
     * Shows the edit team member view.
     *
     * @return \Illuminate\View\View
     */
    public function showTeamMemberView(User $user)
    {
        return View::make('dashboard.team.edit')->with([
            'pageTitle' => trans('dashboard.team.edit.title').' - '.trans('dashboard.dashboard'),
            'user'      => $user,
        ]);
    }

    /**
     * Shows the add team member view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddTeamMemberView()
    {
        return View::make('dashboard.team.add')->with([
            'pageTitle' => trans('dashboard.team.add.title').' - '.trans('dashboard.dashboard'),
        ]);
    }

    /**
     * Creates a new team member.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddUser()
    {
        $user = User::create(Binput::all());

        if (!$user->isValid()) {
            segment_track('Dashboard', [
                'event'   => 'Added User',
                'success' => false,
            ]);

            return Redirect::back()->withInput(Binput::except('password'))
                ->with('title', sprintf(
                    '%s - %s',
                    trans('dashboard.notifications.whoops'),
                    trans('dashboard.team.add.failure')
                ))
                ->with('errors', $user->getErrors());
        }

        segment_track('Dashboard', [
            'event'   => 'Added User',
            'success' => true,
        ]);

        $successMsg = sprintf(
            '%s - %s',
            trans('dashboard.notifications.awesome'),
            trans('dashboard.team.add.success')
        );

        return Redirect::back()->with('success', $successMsg);
    }

    /**
     * Updates a user.
     *
     * @param \CachetHQ\Cachet\Models\User $user
     *
     * @return \Illuminate\View\View
     */
    public function postUpdateUser(User $user)
    {
        $items = Binput::all();

        $passwordChange = array_get($items, 'password');

        if (trim($passwordChange) === '') {
            unset($items['password']);
        }

        $user->update($items);

        if (!$user->isValid()) {
            segment_track('Dashboard', [
                'event'   => 'Updated User',
                'success' => false,
            ]);

            return Redirect::back()->withInput(Binput::except('password'))
                ->with('title', sprintf(
                    '%s - %s',
                    trans('dashboard.notifications.whoops'),
                    trans('dashboard.team.edit.failure')
                ))
                ->with('errors', $user->getErrors());
        }

        segment_track('Dashboard', [
            'event'   => 'Updated User',
            'success' => true,
        ]);

        $successMsg = sprintf(
            '%s - %s',
            trans('dashboard.notifications.awesome'),
            trans('dashboard.team.edit.success')
        );

        return Redirect::back()->with('success', $successMsg);
    }
}
