<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Api;

use CachetHQ\Cachet\Commands\ComponentGroup\AddComponentGroupCommand;
use CachetHQ\Cachet\Commands\ComponentGroup\RemoveComponentGroupCommand;
use CachetHQ\Cachet\Commands\ComponentGroup\UpdateComponentGroupCommand;
use CachetHQ\Cachet\Models\ComponentGroup;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class ComponentGroupController extends AbstractApiController
{
    use DispatchesJobs;

    /**
     * Get all groups.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getGroups()
    {
        $groups = ComponentGroup::paginate(Binput::get('per_page', 20));

        return $this->paginator($groups, Request::instance());
    }

    /**
     * Get a single group.
     *
     * @param \CachetHQ\Cachet\Models\ComponentGroup $group
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getGroup(ComponentGroup $group)
    {
        return $this->item($group);
    }

    /**
     * Create a new component group.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postGroups()
    {
        try {
            $group = $this->dispatch(new AddComponentGroupCommand(
                Binput::get('name'),
                Binput::get('order', 0)
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($group);
    }

    /**
     * Update an existing group.
     *
     * @param \CachetHQ\Cachet\Models\ComponentGroup $group
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function putGroup(ComponentGroup $group)
    {
        try {
            $group = $this->dispatch(new UpdateComponentGroupCommand(
                $group,
                Binput::get('name'),
                Binput::get('order', 0)
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($group);
    }

    /**
     * Delete an existing group.
     *
     * @param \CachetHQ\Cachet\Models\ComponentGroup $group
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteGroup(ComponentGroup $group)
    {
        $this->dispatch(new RemoveComponentGroupCommand($group));

        return $this->noContent();
    }
}
