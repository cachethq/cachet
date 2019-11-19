<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Http\Controllers\Dashboard;

use AltThree\Validator\ValidationException;
use App\Bus\Commands\User\CreateUserCommand;
use App\Bus\Commands\User\InviteUserCommand;
use App\Bus\Commands\User\RemoveUserCommand;
use App\Models\User;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
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
     * @param \App\Models\User $user
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
     * Shows the invite team member view.
     *
     * @return \Illuminate\View\View
     */
    public function showInviteTeamMemberView()
    {
        return View::make('dashboard.team.invite')
            ->withPageTitle(trans('dashboard.team.invite.title').' - '.trans('dashboard.dashboard'));
    }

    /**
     * Creates a new team member.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddUser()
    {
        try {
            execute(new CreateUserCommand(
                Binput::get('username'),
                Binput::get('password'),
                Binput::get('email'),
                Binput::get('level')
            ));
        } catch (ValidationException $e) {
            return cachet_redirect('dashboard.team.create')
                ->withInput(Binput::except('password'))
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.team.add.failure')))
                ->withErrors($e->getMessageBag());
        }

        return cachet_redirect('dashboard.team.create')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.team.add.success')));
    }

    /**
     * Updates a user.
     *
     * @param \App\Models\User $user
     *
     * @return \Illuminate\View\View
     */
    public function postUpdateUser(User $user)
    {
        $userData = array_filter(Binput::only(['username', 'email', 'password', 'level']));

        try {
            $user->update($userData);
        } catch (ValidationException $e) {
            return cachet_redirect('dashboard.team.edit', [$user->id])
                ->withInput($userData)
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.team.edit.failure')))
                ->withErrors($e->getMessageBag());
        }

        return cachet_redirect('dashboard.team.edit', [$user->id])
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.team.edit.success')));
    }

    /**
     * Creates a new team member.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postInviteUser()
    {
        try {
            execute(new InviteUserCommand(
                array_unique(array_filter((array) Binput::get('emails')))
            ));
        } catch (ValidationException $e) {
            return cachet_redirect('dashboard.team.invite')
                ->withInput(Binput::except('password'))
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.team.invite.failure')))
                ->withErrors($e->getMessageBag());
        }

        return cachet_redirect('dashboard.team.invite')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.team.invite.success')));
    }

    /**
     * Delete a user.
     *
     * @param \App\Models\User $user
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteUser(User $user)
    {
        execute(new RemoveUserCommand($user));

        return cachet_redirect('dashboard.team')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.team.delete.success')));
    }
}
