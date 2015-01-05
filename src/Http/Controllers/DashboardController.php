<?php

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\User;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    /**
     * Shows the dashboard view.
     *
     * @return \Illuminate\View\View
     */
    public function showDashboard()
    {
        // TODO: Find steps needed to complete setup.
        $components = Component::all();

        return View::make('dashboard.index')->with([
            'components' => $components,
        ]);
    }

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

        if ($user->isValid()) {
            return Redirect::back()->with('created', $user->isValid());
        } else {
            return Redirect::back()
                ->withInput(Binput::except('password'))
                ->with('errors', $user->getErrors());
        }
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

        $updated = $user->update($items);

        return Redirect::back()->with('updated', $updated);
    }

    /**
     * Shows the metrics view.
     *
     * @return \Illuminate\View\View
     */
    public function showMetrics()
    {
        return View::make('dashboard.metrics.index')->with([
            'pageTitle' => trans('dashboard.metrics.metrics').' - '.trans('dashboard.dashboard'),
        ]);
    }

    /**
     * Shows the notifications view.
     *
     * @return \Illuminate\View\View
     */
    public function showNotifications()
    {
        return View::make('dashboard.notifications.index')->with([
            'pageTitle' => trans('dashboard.notifications.notifications').' - '.trans('dashboard.dashboard'),
        ]);
    }
}
