<?php

namespace CachetHQ\Cachet\Controllers;

use Component;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class DashComponentController extends Controller
{
    /**
     * Shows the components view.
     *
     * @return \Illuminate\View\View
     */
    public function showComponents()
    {
        $components = Component::orderBy('order')->orderBy('created_at')->get();

        return View::make('dashboard.components.index')->with([
            'pageTitle'  => 'Components - Dashboard',
            'components' => $components,
        ]);
    }

    /**
     * Shows the edit component view.
     *
     * @param \Component $component
     *
     * @return \Illuminate\View\View
     */
    public function showEditComponent(Component $component)
    {
        return View::make('dashboard.components.edit')->with([
            'pageTitle' => 'Editing "'.$component->name.'" Component - Dashboard',
            'component' => $component,
        ]);
    }

    /**
     * Updates a component.
     *
     * @param \Component $component
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateComponentAction(Component $component)
    {
        $_component = Input::get('component');
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
        return View::make('dashboard.components.add')->with([
            'pageTitle' => 'Add Component - Dashboard',
        ]);
    }

    /**
     * Creates a new component.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createComponentAction()
    {
        $_component = Input::get('component');
        $component = Component::create($_component);

        return Redirect::back()->with('component', $component);
    }

    /**
     * Deletes a given component.
     *
     * @param \Component $component
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteComponentAction(Component $component)
    {
        $component->delete();

        return Redirect::back();
    }
}
