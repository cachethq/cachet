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
use CachetHQ\Cachet\Bus\Commands\ComponentGroup\CreateComponentGroupCommand;
use CachetHQ\Cachet\Bus\Commands\ComponentGroup\RemoveComponentGroupCommand;
use CachetHQ\Cachet\Bus\Commands\ComponentGroup\UpdateComponentGroupCommand;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

/**
 * This is the component group controller class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ComponentGroupController extends Controller
{
    /**
     * Array of sub-menu items.
     *
     * @var array
     */
    protected $subMenu = [];

    /**
     * Creates a new component controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->subMenu = [
            'components' => [
                'title'  => trans('dashboard.components.components'),
                'url'    => cachet_route('dashboard.components'),
                'icon'   => 'ion-ios-browsers',
                'active' => false,
            ],
            'groups' => [
                'title'  => trans_choice('dashboard.components.groups.groups', 2),
                'url'    => cachet_route('dashboard.components.groups'),
                'icon'   => 'ion-folder',
                'active' => false,
            ],
        ];

        View::share([
            'sub_menu'  => $this->subMenu,
            'subTitle'  => trans_choice('dashboard.components.components', 2),
        ]);
    }

    /**
     * Shows the component groups view.
     *
     * @return \Illuminate\View\View
     */
    public function showComponentGroups()
    {
        $this->subMenu['groups']['active'] = true;

        return View::make('dashboard.components.groups.index')
            ->withPageTitle(trans_choice('dashboard.components.groups.groups', 2).' - '.trans('dashboard.dashboard'))
            ->withGroups(ComponentGroup::orderBy('order')->get())
            ->withSubMenu($this->subMenu);
    }

    /**
     * Deletes a given component group.
     *
     * @param \CachetHQ\Cachet\Models\ComponentGroup $group
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteComponentGroupAction(ComponentGroup $group)
    {
        execute(new RemoveComponentGroupCommand($group));

        return cachet_redirect('dashboard.components.groups')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.components.delete.success')));
    }

    /**
     * Shows the add component group view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddComponentGroup()
    {
        return View::make('dashboard.components.groups.add')
            ->withPageTitle(trans('dashboard.components.groups.add.title').' - '.trans('dashboard.dashboard'));
    }

    /**
     * Shows the edit component group view.
     *
     * @param \CachetHQ\Cachet\Models\ComponentGroup $group
     *
     * @return \Illuminate\View\View
     */
    public function showEditComponentGroup(ComponentGroup $group)
    {
        return View::make('dashboard.components.groups.edit')
            ->withPageTitle(trans('dashboard.components.groups.edit.title').' - '.trans('dashboard.dashboard'))
            ->withGroup($group);
    }

    /**
     * Creates a new component.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddComponentGroup()
    {
        try {
            $group = execute(new CreateComponentGroupCommand(
                Binput::get('name'),
                Binput::get('order', 0),
                Binput::get('collapsed'),
                Binput::get('visible')
            ));
        } catch (ValidationException $e) {
            return cachet_redirect('dashboard.components.groups.create')
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.components.groups.add.failure')))
                ->withErrors($e->getMessageBag());
        }

        return cachet_redirect('dashboard.components.groups')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.components.groups.add.success')));
    }

    /**
     * Updates a component group.
     *
     * @param \CachetHQ\Cachet\Models\ComponentGroup $group
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateComponentGroupAction(ComponentGroup $group)
    {
        try {
            $group = execute(new UpdateComponentGroupCommand(
                $group,
                Binput::get('name'),
                $group->order,
                Binput::get('collapsed'),
                Binput::get('visible')
            ));
        } catch (ValidationException $e) {
            return cachet_redirect('dashboard.components.groups.edit', [$group->id])
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.components.groups.edit.failure')))
                ->withErrors($e->getMessageBag());
        }

        return cachet_redirect('dashboard.components.groups.edit', [$group->id])
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.components.groups.edit.success')));
    }
}
