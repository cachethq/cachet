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

use CachetHQ\Cachet\Bus\Commands\ComponentGroup\CreateComponentGroupCommand;
use CachetHQ\Cachet\Bus\Commands\ComponentGroup\RemoveComponentGroupCommand;
use CachetHQ\Cachet\Bus\Commands\ComponentGroup\UpdateComponentGroupCommand;
use CachetHQ\Cachet\Models\ComponentGroup;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 *
 * This is the component group controller.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 * @author Joseph Cohen <joe@alt-three.com>
 *
 * @resource ComponentGroup
 */
class ComponentGroupController extends AbstractApiController
{
    /**
     * The user session object.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $guard;

    /**
     * Creates a new component group controller instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard $guard
     */
    public function __construct(Guard $guard)
    {
        $this->guard = $guard;
    }

    /**
     * Get all groups.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *   path="/components/groups",
     *   summary="Get all component groups.",
     *   tags={"Component groups"},
     *   description="",
     *   operationId="ComponentGroup@index",
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     name="id",
     *     in="query",
     *     description="Id of the component groups to filter.",
     *     required=false,
     *     type="integer",
     *     format="int64"
     *   ),
     *   @SWG\Parameter(
     *     name="name",
     *     in="query",
     *     description="Name of the component groups to filter.",
     *     required=false,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="collapsed",
     *     in="query",
     *     description="1 if the component groups to filter are collapsed, 0 otherwise.",
     *     required=false,
     *     type="integer",
     *     format="int64"
     *   ),
     *   @SWG\Parameter(
     *     name="visible",
     *     in="query",
     *     description="1 if the component groups to filter are visible, 0 otherwise.",
     *     required=false,
     *     type="integer",
     *     format="int64"
     *   ),
     *   @SWG\Parameter(
     *     description="The field on which sort the results.",
     *     in="query",
     *     name="sort",
     *     required=false,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     description="The direction on which sort the results. 'asc' or 'desc'. Default 'asc'.",
     *     in="query",
     *     name="order",
     *     required=false,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     description="The number of items to get. Default to 20.",
     *     in="query",
     *     name="per_page",
     *     required=false,
     *     type="integer",
     *     format="int64"
     *   ),
     *   @SWG\Response(
     *     response=200,
     *     description="A list of component groups."
     *   ),
     * )
     */
    public function index()
    {
        $groups = ComponentGroup::query();
        if (!$this->guard->check()) {
            $groups = ComponentGroup::visible();
        }

        $groups->search(Binput::except(['sort', 'order', 'per_page']));

        if ($sortBy = Binput::get('sort')) {
            $direction = Binput::get('order', 'asc');

            $groups->sort($sortBy, $direction);
        }

        $groups = $groups->paginate(Binput::get('per_page', 20));

        return $this->paginator($groups, Request::instance());
    }

    /**
     * Get a single group.
     *
     * @param \CachetHQ\Cachet\Models\ComponentGroup $group
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *   path="/components/groups/{component_group}",
     *   summary="Get a single component group.",
     *   tags={"Component groups"},
     *   description="",
     *   operationId="ComponentGroup@show",
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     name="component_group",
     *     in="path",
     *     description="Component group to filter.",
     *     required=true,
     *     type="integer",
     *     format="int64"
     *   ),
     *   @SWG\Response(
     *     response=200,
     *     description="The component group."
     *   ),
     *   @SWG\Response(
     *     response="404",
     *     description="Component group not found.",
     *   ),
     * )
     */
    public function show(ComponentGroup $group)
    {
        return $this->item($group);
    }

    /**
     * Create a new component group.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Post(
     *   path="/components/groups",
     *   tags={"Component groups"},
     *   operationId="ComponentGroup@store",
     *   summary="Create a new component group.",
     *   description="",
     *   consumes={"application/x-www-form-urlencoded"},
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     name="name",
     *     in="formData",
     *     type="string",
     *     description="Name of the component group.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="order",
     *     in="formData",
     *     type="integer",
     *     format="int64",
     *     description="Order of the component group. Default to 0.",
     *     required=false
     *   ),
     *   @SWG\Parameter(
     *     name="collapsed",
     *     in="formData",
     *     type="integer",
     *     format="int64",
     *     description="1 of the component group should be collapsed, 0 otherwise. Default to 0.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="visible",
     *     in="formData",
     *     type="integer",
     *     format="int64",
     *     description="If the component should be visible or not. Default to visible only for authenticated.",
     *     required=true
     *   ),
     *   @SWG\Response(
     *     response=200,
     *     description="The component group.",
     *   ),
     *   @SWG\Response(
     *     response=400,
     *     description="Component group invalid.",
     *   )
     * )
     */
    public function store()
    {
        try {
            $group = dispatch(new CreateComponentGroupCommand(
                Binput::get('name'),
                Binput::get('order', 0),
                Binput::get('collapsed', 0),
                Binput::get('visible', ComponentGroup::VISIBLE_AUTHENTICATED)
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
     *
     * @SWG\Put(
     *   path="/components/groups/{component_group}",
     *   tags={"Component groups"},
     *   operationId="ComponentGroup@update",
     *   summary="Update an existing component group.",
     *   description="",
     *   consumes={"application/x-www-form-urlencoded"},
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     name="component_group",
     *     in="path",
     *     type="integer",
     *     format="int64",
     *     description="The identifier of the component group to update.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="name",
     *     in="formData",
     *     type="string",
     *     description="The component group to update.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="order",
     *     in="formData",
     *     type="integer",
     *     format="int64",
     *     description="The order of the component group to update.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="collapsed",
     *     in="formData",
     *     type="integer",
     *     format="int64",
     *     description="1 of the component group should be collapsed, 0 otherwise.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="visible",
     *     in="formData",
     *     type="integer",
     *     format="int64",
     *     description="1 of the component group should be visible, 0 otherwise.",
     *     required=true
     *   ),
     *   @SWG\Response(
     *     response=200,
     *     description="The component group."
     *   ),
     *   @SWG\Response(
     *     response=400,
     *     description="Component group invalid."
     *   )
     * )
     */
    public function update(ComponentGroup $group)
    {
        try {
            $group = dispatch(new UpdateComponentGroupCommand(
                $group,
                Binput::get('name'),
                Binput::get('order'),
                Binput::get('collapsed'),
                Binput::get('visible')
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
     *
     * @SWG\Delete(
     *   path="/components/groups/{component_group}",
     *   summary="Delete a component group.",
     *   description="",
     *   operationId="ComponentGroup@destroy",
     *   tags={"Component groups"},
     *   @SWG\Parameter(
     *     description="Component group id to delete.",
     *     in="path",
     *     name="component_group",
     *     required=true,
     *     type="integer",
     *     format="int64"
     *   ),
     *   @SWG\Response(
     *     response=204,
     *     description="Ok."
     *   )
     * )
     */
    public function destroy(ComponentGroup $group)
    {
        dispatch(new RemoveComponentGroupCommand($group));

        return $this->noContent();
    }
}
