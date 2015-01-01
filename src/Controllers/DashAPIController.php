<?php

namespace CachetHQ\Cachet\Controllers

use Exception;
use Component;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;

class DashAPIController extends Controller
{
    /**
     * Updates a component with the entered info.
     *
     * @param \Component $component
     *
     * @throws \Exception
     *
     * @return \Component
     */
    public function postUpdateComponent(Component $component)
    {
        if (!$component->update(Input::except(['_token']))) {
            throw new Exception('Failed to update the component.');
        }

        return $component;
    }

    /**
     * Updates a components ordering.
     *
     * @return array
     */
    public function postUpdateComponentOrder()
    {
        $componentData = Input::all();
        unset($componentData['component'][0]); // Remove random 0 index.

        foreach ($componentData['component'] as $componentId => $order) {
            $component = Component::find($componentId);
            $component->update(['order' => $order]);
        }

        return $componentData;
    }
}
