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

use CachetHQ\Cachet\Bus\Commands\Component\UpdateComponentCommand;
use CachetHQ\Cachet\Bus\Commands\ComponentGroup\UpdateComponentGroupCommand;
use CachetHQ\Cachet\Http\Controllers\Api\AbstractApiController;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\IncidentTemplate;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class ApiController extends AbstractApiController
{
    /**
     * Updates a component with the entered info.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @throws \Symfony\Component\HttpKernel\Exception\BadRequestHttpException
     *
     * @return \CachetHQ\Cachet\Models\Component
     */
    public function postUpdateComponent(Component $component)
    {
        try {
            dispatch(new UpdateComponentCommand(
                $component,
                $component->name,
                $component->description,
                Binput::get('status'),
                $component->link,
                $component->order,
                $component->group_id,
                $component->enabled,
                $component->meta,
                false
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($component);
    }

    /**
     * Updates a components ordering.
     *
     * @return array
     */
    public function postUpdateComponentOrder()
    {
        $componentData = Binput::get('ids');

        foreach ($componentData as $order => $componentId) {
            try {
                $component = Component::find($componentId);

                dispatch(new UpdateComponentCommand(
                    $component,
                    $component->name,
                    $component->description,
                    $component->status,
                    $component->link,
                    $order + 1,
                    $component->group_id,
                    $component->enabled,
                    $component->meta,
                    true
                ));
            } catch (QueryException $e) {
                throw new BadRequestHttpException();
            }
        }

        return $this->collection(Component::query()->orderBy('order')->get());
    }

    /**
     * Updates the order of component groups.
     *
     * @return array
     */
    public function postUpdateComponentGroupOrder()
    {
        $groupData = Binput::get('ids');

        foreach ($groupData as $order => $groupId) {
            $group = ComponentGroup::find($groupId);

            dispatch(new UpdateComponentGroupCommand(
                $group,
                $group->name,
                $order + 1,
                $group->collapsed,
                $group->visible
            ));
        }

        return $this->collection(ComponentGroup::query()->orderBy('order')->get());
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

        if ($template = IncidentTemplate::where('slug', '=', $templateSlug)->first()) {
            return $template;
        }

        throw new ModelNotFoundException("Incident template for $templateSlug could not be found.");
    }
}
