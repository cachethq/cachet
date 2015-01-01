<?php

class DashAPIController extends Controller
{
    /**
     * Updates a component with the entered info.
     *
     * @param Component $component
     *
     * @return array
     */
    public function postUpdateComponent(Component $component)
    {
        $componentData = Input::all();
        unset($componentData['_token']);
        if ($component->update($componentData)) {
            return $component;
        } else {
            App::abort(500);
        }
    }

    public function postUpdateComponentOrder()
    {
        $componentData = Input::all();
        unset($componentData['component'][0]); // Remove random 0 index.

        foreach ($componentData['component'] as $componentId => $order) {
            $component = Component::find($componentId);
            $component->update([
                'order' => $order
            ]);
        }

        return $componentData;
    }
}
