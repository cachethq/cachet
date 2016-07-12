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
use CachetHQ\Cachet\Bus\Commands\TimedAction\CreateTimedActionCommand;
use CachetHQ\Cachet\Bus\Commands\TimedAction\CreateTimedActionGroupCommand;
use CachetHQ\Cachet\Bus\Commands\TimedAction\DeleteTimedActionCommand;
use CachetHQ\Cachet\Bus\Commands\TimedAction\DeleteTimedActionGroupCommand;
use CachetHQ\Cachet\Bus\Commands\TimedAction\UpdateTimedActionCommand;
use CachetHQ\Cachet\Bus\Commands\TimedAction\UpdateTimedActionGroupCommand;
use CachetHQ\Cachet\Models\TimedAction;
use CachetHQ\Cachet\Models\TimedActionGroup;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

/**
 * This is the action controller class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ActionController extends Controller
{
    /**
     * Stores the sub-sidebar tree list.
     *
     * @var array
     */
    protected $subMenu = [];

    /**
     * Creates a new schedule controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->subMenu = [
            'actions' => [
                'title'  => trans('dashboard.actions.actions'),
                'url'    => route('dashboard.actions.index'),
                'icon'   => 'ion-android-checkmark-circle',
                'active' => false,
            ],
            'groups' => [
                'title'  => trans('dashboard.actions.action_groups'),
                'url'    => route('dashboard.actions.groups.index'),
                'icon'   => 'ion-android-calendar',
                'active' => false,
            ],
        ];

        View::share('sub_menu', $this->subMenu);
        View::share('sub_title', trans('dashboard.actions.actions'));
    }

    /**
     * Show all time sensitive actions.
     *
     * @return \Illuminate\View\View
     */
    public function showActions()
    {
        $actions = TimedAction::orderBy('created_at')->get();

        $this->subMenu['actions']['active'] = true;

        return View::make('dashboard.actions.index')
            ->withPageTitle(trans('dashboard.actions.actions').' - '.trans('dashboard.dashboard'))
            ->withActions($actions)
            ->withSubMenu($this->subMenu);
    }

    /**
     * Show all time sensitive action groups.
     *
     * @return \Illuminate\View\View
     */
    public function showActionGroups()
    {
        $groups = TimedActionGroup::orderBy('created_at')->get();

        $this->subMenu['groups']['active'] = true;

        return View::make('dashboard.actions.groups.index')
            ->withPageTitle(trans('dashboard.actions.action_groups').' - '.trans('dashboard.dashboard'))
            ->withGroups($groups)
            ->withSubMenu($this->subMenu);
    }

    /**
     * Shows the add time sensitive actions form.
     *
     * @return \Illuminate\View\View
     */
    public function showAddAction()
    {
        $groups = TimedActionGroup::all();

        return View::make('dashboard.actions.add')
            ->withPageTitle(trans('dashboard.actions.add.title').' - '.trans('dashboard.dashboard'))
            ->withGroups($groups);
    }

    /**
     * Create a new time sensitive action.
     *
     * @return \Illuminate\View\View
     */
    public function createAction()
    {
        try {
            $action = dispatch(new CreateTimedActionCommand(
                Binput::get('name'),
                Binput::get('description'),
                Binput::get('active'),
                Binput::get('start_at'),
                Binput::get('timezone'),
                Binput::get('window_length'),
                Binput::get('completion_latency'),
                Binput::get('timed_action_group_id')
            ));
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.actions.add')
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.actions.add.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.actions.edit', ['id' => $action->id])
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.actions.add.success')));
    }

    /**
     * Shows the add time sensitive action group form.
     *
     * @return \Illuminate\View\View
     */
    public function showAddActionGroup()
    {
        return View::make('dashboard.actions.groups.add')
            ->withPageTitle(trans('dashboard.actions.groups.add.title').' - '.trans('dashboard.dashboard'));
    }

    /**
     * Create a new time sensitive action group.
     *
     * @return \Illuminate\View\View
     */
    public function createActionGroup()
    {
        try {
            $group = dispatch(new CreateTimedActionGroupCommand(
                Binput::get('name'),
                TimedActionGroup::count() + 1
            ));
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.actions.groups.add')
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.actions.groups.add.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.actions.groups.edit', ['id' => $group->id])
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.actions.groups.add.success')));
    }

    /**
     * Show the edit time sensitive action form.
     *
     * @param \CachetHQ\Cachet\Models\TimedAction $action
     *
     * @return \Illuminate\View\View
     */
    public function showEditAction(TimedAction $action)
    {
        $groups = TimedActionGroup::orderBy('created_at')->get();

        return View::make('dashboard.actions.edit')
            ->withPageTitle(trans('dashboard.actions.edit.title').' - '.trans('dashboard.dashboard'))
            ->withAction($action)
            ->withGroups($groups);
    }

    /**
     * Handle updating of a time sensitive action.
     *
     * @param \CachetHQ\Cachet\Models\TimedAction $action
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleEditAction(TimedAction $action)
    {
        try {
            dispatch(new UpdateTimedActionCommand(
                $action,
                Binput::get('name'),
                Binput::get('description'),
                Binput::get('active'),
                Binput::get('timed_action_group_id')
            ));
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.actions.edit', ['id' => $action->id])
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.actions.edit.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.actions.edit', ['id' => $action->id])
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.actions.edit.success')));
    }

    /**
     * Show the edit time sensitive action group form.
     *
     * @param \CachetHQ\Cachet\Models\TimedActionGroup $group
     *
     * @return \Illuminate\View\View
     */
    public function showEditActionGroup(TimedActionGroup $group)
    {
        return View::make('dashboard.actions.groups.edit')
            ->withPageTitle(trans('dashboard.actions.groups.edit.title').' - '.trans('dashboard.dashboard'))
            ->withGroup($group);
    }

    /**
     * Handle updating of the time sensitive action group.
     *
     * @param \CachetHQ\Cachet\Models\TimedActionGroup $group
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleEditActionGroup(TimedActionGroup $group)
    {
        try {
            dispatch(new UpdateTimedActionGroupCommand(
                $group,
                Binput::get('name')
            ));
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.actions.groups.edit', ['id' => $group->id])
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.actions.groups.edit.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.actions.groups.edit', ['id' => $group->id])
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.actions.groups.edit.success')));
    }

    /**
     * Delete a time sensitive action.
     *
     * @param \CachetHQ\Cachet\Models\TimedAction $action
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteAction(TimedAction $action)
    {
        dispatch(new DeleteTimedActionCommand($action));

        return Redirect::route('dashboard.actions.index')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.actions.delete.success')));
    }

    /**
     * Delete a time sensitive action group.
     *
     * @param \CachetHQ\Cachet\Models\TimedActionGroup $group
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteGroupAction(TimedActionGroup $group)
    {
        dispatch(new DeleteTimedActionGroupCommand($group));

        return Redirect::route('dashboard.actions.groups.index')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.actions.groups.delete.success')));
    }
}
