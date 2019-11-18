<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Http\Controllers\Dashboard;

use App\Bus\Commands\Component\UpdateComponentCommand;
use App\Bus\Commands\ComponentGroup\UpdateComponentGroupCommand;
use App\Http\Controllers\Api\AbstractApiController;
use App\Models\Component;
use App\Models\ComponentGroup;
use App\Models\IncidentTemplate;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class ApiController extends AbstractApiController
{
    /**
     * Updates a component with the entered info.
     *
     * @param \App\Models\Component $component
     *
     * @throws \Symfony\Component\HttpKernel\Exception\BadRequestHttpException
     *
     * @return \App\Models\Component
     */
    public function postUpdateComponent(Component $component)
    {
        try {
            execute(new UpdateComponentCommand(
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

                execute(new UpdateComponentCommand(
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

            execute(new UpdateComponentGroupCommand(
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
     * @return \App\Models\IncidentTemplate
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
