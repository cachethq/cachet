<?php

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;

class DashComponentController extends Controller
{
    protected $subMenu = [];
    protected $subTitle = 'Components';

    public function __construct()
    {
        $this->subMenu = [
            'components' => [
                'title'  => 'Components',
                'url'    => URL::route('dashboard.components'),
                'icon'   => 'ion-ios-keypad',
                'active' => false,
            ],
            'groups' => [
                'title'  => 'Component Groups',
                'url'    => URL::route('dashboard.components.groups'),
                'icon'   => 'ion-folder',
                'active' => false,
            ],
        ];

        View::share('subTitle', $this->subTitle);
        View::share('subMenu', $this->subMenu);
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
            'pageTitle'  => 'Components - Dashboard',
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

        return View::make('dashboard.groups')->with([
            'pageTitle' => 'Component Groups - Dashboard',
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
            'pageTitle' => 'Editing "'.$component->name.'" Component - Dashboard',
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
            'pageTitle' => 'Add Component - Dashboard',
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
     * Shows the add component group view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddComponentGroup()
    {
        return View::make('dashboard.components.add-group')->with([
            'pageTitle' => 'Create Component Group',
        ]);
    }

    public function postAddComponentGroup()
    {
        $_group = Binput::get('group');

        $group = ComponentGroup::create($_group);

        return Redirect::back()->withGroup($group);
    }
}
