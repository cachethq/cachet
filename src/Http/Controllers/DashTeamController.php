<?php

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Models\User;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class DashTeamController extends Controller
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

        if (! $user->isValid()) {
            return Redirect::back()->withInput(Binput::except('password'))
                ->with('title', sprintf("<strong>%s</strong> %s", trans('dashboard.notifications.whoops'), trans('dashboard.team.add.failure')))
                ->with('errors', $user->getErrors());
        }

        return Redirect::back()->with('success', sprintf("<strong>%s</strong> %s", trans('dashboard.notifications.awesome'), trans('dashboard.team.add.success')));
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

        if (! $user->isValid()) {
            return Redirect::back()->withInput(Binput::except('password'))
                ->with('title', sprintf("<strong>%s</strong> %s", trans('dashboard.notifications.whoops'), trans('dashboard.team.edit.failure')))
                ->with('errors', $user->getErrors());
        }

        return Redirect::back()->with('success', sprintf("<strong>%s</strong> %s", trans('dashboard.notifications.awesome'), trans('dashboard.team.edit.success')));
    }
}
