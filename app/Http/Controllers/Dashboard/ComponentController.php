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
use CachetHQ\Cachet\Bus\Commands\Component\CreateComponentCommand;
use CachetHQ\Cachet\Bus\Commands\Component\RemoveComponentCommand;
use CachetHQ\Cachet\Bus\Commands\Component\UpdateComponentCommand;
use CachetHQ\Cachet\Bus\Commands\ComponentGroup\CreateComponentGroupCommand;
use CachetHQ\Cachet\Bus\Commands\ComponentGroup\RemoveComponentGroupCommand;
use CachetHQ\Cachet\Bus\Commands\ComponentGroup\UpdateComponentGroupCommand;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Tag;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class ComponentController extends Controller
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
            'sub_title' => trans_choice('dashboard.components.components', 2),
        ]);
    }

    /**
     * Shows the components view.
     *
     * @return \Illuminate\View\View
     */
    public function showComponents()
    {
        $components = Component::orderBy('order')->orderBy('created_at')->get();

        $this->subMenu['components']['active'] = true;

        return View::make('dashboard.components.index')
            ->withPageTitle(trans_choice('dashboard.components.components', 2).' - '.trans('dashboard.dashboard'))
            ->withComponents($components)
            ->withSubMenu($this->subMenu);
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
     * Shows the edit component view.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @return \Illuminate\View\View
     */
    public function showEditComponent(Component $component)
    {
        $groups = ComponentGroup::all();

        $pageTitle = sprintf('"%s" - %s - %s', $component->name, trans('dashboard.components.edit.title'), trans('dashboard.dashboard'));

        return View::make('dashboard.components.edit')
            ->withPageTitle($pageTitle)
            ->withComponent($component)
            ->withGroups($groups);
    }

    /**
     * Updates a component.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateComponentAction(Component $component)
    {
        $componentData = Binput::get('component');
        $tags = array_pull($componentData, 'tags');

        try {
            $component = dispatch(new UpdateComponentCommand(
                $component,
                $componentData['name'],
                $componentData['description'],
                $componentData['status'],
                $componentData['link'],
                $componentData['order'],
                $componentData['group_id'],
                $componentData['enabled'],
                null, // Meta data cannot be supplied through the dashboard yet.
                true // Silent since we're not really making changes to the component (this should be optional)
            ));
        } catch (ValidationException $e) {
            return cachet_redirect('dashboard.components.edit', [$component->id])
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.components.edit.failure')))
                ->withErrors($e->getMessageBag());
        }

        // The component was added successfully, so now let's deal with the tags.
        $tags = preg_split('/ ?, ?/', $tags);

        // For every tag, do we need to create it?
        $componentTags = array_map(function ($taggable) {
            return Tag::firstOrCreate(['name' => $taggable])->id;
        }, $tags);

        $component->tags()->sync($componentTags);

        return cachet_redirect('dashboard.components.edit', [$component->id])
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.components.edit.success')));
    }

    /**
     * Shows the add component view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddComponent()
    {
        return View::make('dashboard.components.add')
            ->withPageTitle(trans('dashboard.components.add.title').' - '.trans('dashboard.dashboard'))
            ->withGroups(ComponentGroup::all());
    }

    /**
     * Creates a new component.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createComponentAction()
    {
        $componentData = Binput::get('component');
        $tags = array_pull($componentData, 'tags');

        try {
            $component = dispatch(new CreateComponentCommand(
                $componentData['name'],
                $componentData['description'],
                $componentData['status'],
                $componentData['link'],
                $componentData['order'],
                $componentData['group_id'],
                $componentData['enabled'],
                null // Meta data cannot be supplied through the dashboard yet.
            ));
        } catch (ValidationException $e) {
            return cachet_redirect('dashboard.components.create')
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.components.add.failure')))
                ->withErrors($e->getMessageBag());
        }

        // The component was added successfully, so now let's deal with the tags.
        $tags = preg_split('/ ?, ?/', $tags);

        // For every tag, do we need to create it?
        $componentTags = array_map(function ($taggable) {
            return Tag::firstOrCreate(['name' => $taggable])->id;
        }, $tags);

        $component->tags()->sync($componentTags);

        return cachet_redirect('dashboard.components')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.components.add.success')));
    }

    /**
     * Deletes a given component.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteComponentAction(Component $component)
    {
        dispatch(new RemoveComponentCommand($component));

        return cachet_redirect('dashboard.components')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.components.delete.success')));
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
        dispatch(new RemoveComponentGroupCommand($group));

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
            $group = dispatch(new CreateComponentGroupCommand(
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
            $group = dispatch(new UpdateComponentGroupCommand(
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
