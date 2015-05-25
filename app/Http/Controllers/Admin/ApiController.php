<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joe@cachethq.io>
 * (c) Graham Campbell <graham@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Admin;

use CachetHQ\Cachet\Http\Controllers\AbstractController;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\IncidentTemplate;
use Exception;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ApiController extends AbstractController
{
    /**
     * Updates a component with the entered info.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @throws \Exception
     *
     * @return \CachetHQ\Cachet\Models\Component
     */
    public function postUpdateComponent(Component $component)
    {
        if (!$component->update(Binput::except(['_token']))) {
            throw new Exception(trans('dashboard.components.edit.failure'));
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
        $componentData = Binput::all();
        foreach ($componentData['ids'] as $order => $componentId) {
            // Ordering should be 1-based, data comes in 0-based
            Component::find($componentId)->update(['order' => $order + 1]);
        }

        return $componentData;
    }

    /**
     * Updates the order of component groups.
     *
     * @return array
     */
    public function postUpdateComponentGroupOrder()
    {
        $groupData = Binput::all();
        foreach ($groupData['ids'] as $order => $groupId) {
            ComponentGroup::find($groupId)->update([
                'order' => $order + 1,
            ]);
        }

        return $groupData;
    }

    /**
     * Returns a template by slug.
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     *
     * @return \CachetHQ\Cachet\Models\IncidentTemplate
     */
    public function getIncidentTemplate()
    {
        $templateSlug = Binput::get('slug');

        $template = IncidentTemplate::where('slug', $templateSlug)->first();

        if ($template) {
            return $template;
        }

        throw new ModelNotFoundException('Incident template for '.$templateSlug.' could not be found.');
    }
}
