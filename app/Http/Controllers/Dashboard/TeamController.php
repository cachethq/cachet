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
use CachetHQ\Cachet\Commands\User\AddTeamMemberCommand;
use CachetHQ\Cachet\Commands\User\RemoveUserCommand;
use CachetHQ\Cachet\Models\User;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class TeamController extends Controller
{
    use DispatchesJobs;

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
            $this->dispatch(new AddTeamMemberCommand(
                Binput::get('username'),
                Binput::get('password'),
                Binput::get('email'),
                Binput::get('level')
            ));
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.team.add')
                ->withInput(Binput::except('password'))
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.team.add.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.team.add')
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
        $userData = array_filter(Binput::only(['username', 'email', 'password', 'level']));

        try {
            $user->update($userData);
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.team.edit', ['id' => $user->id])
                ->withInput($userData)
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.team.edit.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.team.edit', ['id' => $user->id])
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
            $this->dispatch(new InviteTeamMemberCommand(
                array_unique(array_filter((array) Binput::get('emails')))
            ));
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.team.invite')
                ->withInput(Binput::except('password'))
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.team.invite.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.team.invite')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.team.invite.success')));
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
        $this->dispatch(new RemoveUserCommand($user));

        return Redirect::route('dashboard.team.index')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.team.delete.success')));
    }
}
