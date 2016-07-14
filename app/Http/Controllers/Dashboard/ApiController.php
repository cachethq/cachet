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
                null,
                null,
                Binput::get('status'),
                null,
                null,
                null,
                null
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
                dispatch(new UpdateComponentCommand(
                    Component::find($componentId),
                    null,
                    null,
                    null,
                    null,
                    $order + 1,
                    null,
                    null
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
            dispatch(new UpdateComponentGroupCommand(
                ComponentGroup::find($groupId),
                null,
                $order + 1,
                null
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

        if ($template = IncidentTemplate::where('slug', $templateSlug)->first()) {
            return $template;
        }

        throw new ModelNotFoundException("Incident template for $templateSlug could not be found.");
    }
}
