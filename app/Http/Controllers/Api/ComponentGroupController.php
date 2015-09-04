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
use CachetHQ\Cachet\Models\ComponentGroup;
use Exception;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class ComponentGroupController extends AbstractApiController
{
    use DispatchesJobs;

    /**
     * Get all groups.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getGroups(Request $request)
    {
        $groups = ComponentGroup::paginate(Binput::get('per_page', 20));

        return $this->paginator($groups, $request);
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
        } catch (Exception $e) {
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
        $groupData = array_filter(Binput::only(['name', 'order']));

        try {
            $group->update($groupData);
        } catch (Exception $e) {
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
