<?php

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class DashComponentController extends Controller
{
    protected $subMenu = [];

    public function __construct()
    {
        $this->subMenu = [
            'components' => [
                'title'  => trans_choice('dashboard.components.components', 2),
                'url'    => route('dashboard.components'),
                'icon'   => 'ion-ios-keypad',
                'active' => false,
            ],
            'groups' => [
                'title'  => trans_choice('dashboard.components.groups.groups', 2),
                'url'    => route('dashboard.components.groups'),
                'icon'   => 'ion-folder',
                'active' => false,
            ],
        ];

        View::share('subMenu', $this->subMenu);

        View::share('subTitle', trans_choice('dashboard.components.components', 2));
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

        return View::make('dashboard.components.index')->with([
            'pageTitle'  => trans_choice('dashboard.components.components', 2).' - '.trans('dashboard.dashboard'),
            'components' => $components,
            'subMenu'    => $this->subMenu,
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

        return View::make('dashboard.components.groups.index')->with([
            'pageTitle' => trans_choice('dashboard.components.groups.groups', 2).' - '.trans('dashboard.dashboard'),
            'groups'    => ComponentGroup::all(),
            'subMenu'   => $this->subMenu,
        ]);
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

        return View::make('dashboard.components.edit')->with([
            'pageTitle' => '"'.$component->name.'" - '.trans('dashboard.components.edit.title').' - '.trans('dashboard.dashboard'),
            'component' => $component,
            'groups'    => $groups,
        ]);
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
        $_component = Binput::get('component');
        $component->update($_component);

        return Redirect::back()->with('savedComponent', $component);
    }

    /**
     * Shows the add component view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddComponent()
    {
        $groups = ComponentGroup::all();

        return View::make('dashboard.components.add')->with([
            'pageTitle' => trans('dashboard.components.add.title').' - '.trans('dashboard.dashboard'),
            'groups'    => $groups,
        ]);
    }

    /**
     * Creates a new component.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createComponentAction()
    {
        $_component = Binput::get('component');
        $component = Component::create($_component);

        return Redirect::back()->with('component', $component);
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
        $component->delete();

        return Redirect::back();
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
        $group->delete();

        return Redirect::back();
    }

    /**
     * Shows the add component group view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddComponentGroup()
    {
        return View::make('dashboard.components.groups.add')->with([
            'pageTitle' => trans('dashboard.components.groups.add.title').' - '.trans('dashboard.dashboard'),
        ]);
    }

    /**
     * Creates a new component.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddComponentGroup()
    {
        $group = ComponentGroup::create(Binput::get('group'));

        return Redirect::back()->withGroup($group);
    }
}
