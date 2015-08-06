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
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class TeamController extends Controller
{
    /**
     * Shows the team members view.
     *
     * @return \Illuminate\View\View
     */
    public function showTeamView()
    {
        $team = User::all();

        return View::make('dashboard.team.index')
            ->withPageTitle(trans('dashboard.team.team').' - '.trans('dashboard.dashboard'))
            ->withTeamMembers($team);
    }

    /**
     * Shows the edit team member view.
     *
     * @return \Illuminate\View\View
     */
    public function showTeamMemberView(User $user)
    {
        return View::make('dashboard.team.edit')
            ->withPageTitle(trans('dashboard.team.edit.title').' - '.trans('dashboard.dashboard'))
            ->withUser($user);
    }

    /**
     * Shows the add team member view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddTeamMemberView()
    {
        return View::make('dashboard.team.add')
            ->withPageTitle(trans('dashboard.team.add.title').' - '.trans('dashboard.dashboard'));
    }

    /**
     * Creates a new team member.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddUser()
    {
        try {
            User::create(Binput::all());
        } catch (ValidationException $e) {
            return Redirect::back()
                ->withInput(Binput::except('password'))
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.team.add.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::back()
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.team.add.success')));
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

        try {
            $user->update($items);
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
     * Delete a user.
     *
     * @param \CachetHQ\Cachet\Models\User $user
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteUser(User $user)
    {
        $user->delete();

        return Redirect::route('dashboard.team')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.team.delete.success')));
    }
}
