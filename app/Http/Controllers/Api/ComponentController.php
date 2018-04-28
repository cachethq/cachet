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

use CachetHQ\Cachet\Bus\Commands\Component\CreateComponentCommand;
use CachetHQ\Cachet\Bus\Commands\Component\RemoveComponentCommand;
use CachetHQ\Cachet\Bus\Commands\Component\UpdateComponentCommand;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Tag;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * The Component API controller.
 *
 * @resource Component
 */
class ComponentController extends AbstractApiController
{
    /**
     * Get all components.
     *
     * @SWG\Get(
     *   path="/components",
     *   summary="List all components",
     *   operationId="index",
     *   tags={"Components"},
     *   produces={"application/json"}, 
     *   @SWG\Parameter(
     *      description="ID of the component to filter",
     *      in="query",
     *      name="id",
     *      required=false,
     *      type="integer",
     *      format="int64"
     *   ),
     *   @SWG\Parameter(
     *      description="Name of the components to filter",
     *      in="query",
     *      name="name",
     *      required=false,
     *      type="string"
     *   ),
     *   @SWG\Parameter(
     *      description="Status of components to filter",
     *      in="query",
     *      name="status",
     *      required=false,
     *      type="integer",
     *      format="int64"
     *   ),
     *   @SWG\Parameter(
     *      description="Group identifier of components to filter",
     *      in="query",
     *      name="group_id",
     *      required=false,
     *      type="integer",
     *      format="int64"
     *   ),
     *   @SWG\Parameter(
     *      description="If the components should be enabled or not, 1 or 0.",
     *      in="query",
     *      name="enabled",
     *      required=false,
     *      type="integer",
     *      format="int64"
     *   ),
     *   @SWG\Response(
     *      response=200,
     *      description="A list with all components"
     *   ),
     * )
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        if (app(Guard::class)->check()) {
            $components = Component::query();
        } else {
            $components = Component::enabled();
        }

        $components->search(Binput::except(['sort', 'order', 'per_page']));

        if ($sortBy = Binput::get('sort')) {
            $direction = Binput::has('order') && Binput::get('order') == 'desc';

            $components->sort($sortBy, $direction);
        }

        $components = $components->paginate(Binput::get('per_page', 20));

        return $this->paginator($components, Request::instance());
    }

    /**
     * Get a single component.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *   path="/components/{component}",
     *   summary="Get a single component",
     *   tags={"Components"},
     *   @SWG\Parameter(
     *      description="ID of component to return",
     *      in="path",
     *      name="component",
     *      required=true,
     *      type="integer",
     *      format="int64"
     *  ),
     *  @SWG\Response(
     *      response=200,
     *      description="A single component"
     *   )
     * )
     */
    public function show(Component $component)
    {
        return $this->item($component);
    }

    /**
     * Create a new component.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     *
     * @SWG\Post(
     *   path="/components",
     *   tags={"Components"},
     *   operationId="store",
     *   summary="Add a new component",
     *   description="",
     *   consumes={"multipart/form-data"},
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *      name="name",
     *      in="formData",
     *      type="string",
     *      description="Name of the component",
     *      required=true
     *   ),
     *   @SWG\Parameter(
     *      name="description",
     *      in="formData",
     *      type="string",
     *      description="Description of the component",
     *      required=true
     *   ),
     *   @SWG\Parameter(
     *      name="status",
     *      in="formData",
     *      type="integer",
     *      description="Status of the component (between 1 and 4)",
     *      required=true
     *   ),
     *   @SWG\Parameter(
     *      name="link",
     *      in="formData",
     *      type="string",
     *      description="A hyperlink to the component",
     *      required=true
     *   ),
     *   @SWG\Parameter(
     *      name="order",
     *      in="formData",
     *      type="integer",
     *      description="Order of the component",
     *      required=true
     *   ),
     *   @SWG\Parameter(
     *      name="group_id",
     *      in="formData",
     *      type="integer",
     *      description="Group identifier of the component",
     *      required=true
     *   ),
     *   @SWG\Parameter(
     *      name="enabled",
     *      in="formData",
     *      type="integer",
     *      description="1 if the component is enabled, 0 otherwise.",
     *      required=false
     *   ),
     *   @SWG\Response(
     *      response=200,
     *      description="Ok"
     *   )
     * )
     *
     *
     */
    public function store()
    {
        try {
            $component = dispatch(new CreateComponentCommand(
                Binput::get('name'),
                Binput::get('description'),
                Binput::get('status'),
                Binput::get('link'),
                Binput::get('order'),
                Binput::get('group_id'),
                (bool) Binput::get('enabled', true),
                Binput::get('meta', null)
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        if (Binput::has('tags')) {
            // The component was added successfully, so now let's deal with the tags.
            $tags = preg_split('/ ?, ?/', Binput::get('tags'));

            // For every tag, do we need to create it?
            $componentTags = array_map(function ($taggable) use ($component) {
                return Tag::firstOrCreate([
                    'name' => $taggable,
                ])->id;
            }, $tags);

            $component->tags()->sync($componentTags);
        }

        return $this->item($component);
    }

    /**
     * Update an existing component.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @return \Illuminate\Http\JsonResponse
     *
     *
     * @SWG\Put(
     *   path="/components/{component}",
     *   tags={"Components"},
     *   operationId="update",
     *   summary="Update an existing component",
     *   description="",
     *   consumes={"multipart/form-data"},
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *      name="component",
     *      in="path",
     *      type="integer",
     *      description="Identifier of the component to update",
     *      required=true
     *   ),
     *   @SWG\Parameter(
     *      name="name",
     *      in="formData",
     *      type="string",
     *      description="Name of the component",
     *      required=true
     *   ),
     *   @SWG\Parameter(
     *      name="status",
     *      in="formData",
     *      type="integer",
     *      description="Status of the component (between 1 and 4)",
     *      required=true
     *   ),
     *   @SWG\Parameter(
     *      name="link",
     *      in="formData",
     *      type="string",
     *      description="A hyperlink of the component",
     *      required=true
     *   ),
     *   @SWG\Parameter(
     *      name="order",
     *      in="formData",
     *      type="integer",
     *      description="The order of the component",
     *      required=true
     *   ),
     *   @SWG\Parameter(
     *      name="group_id",
     *      in="formData",
     *      type="integer",
     *      description="The group id of the component",
     *      required=true
     *   ),
     *   @SWG\Parameter(
     *      name="enabled",
     *      in="formData",
     *      type="integer",
     *      description="1 to enable the component, 0 otherwise",
     *      required=false
     *   ),
     *   @SWG\Response(
     *      response=200,
     *      description="Ok"
     *   )
     * )
     *
     *
     */
    public function update(Component $component)
    {
        try {
            dispatch(new UpdateComponentCommand(
                $component,
                Binput::get('name'),
                Binput::get('description'),
                Binput::get('status'),
                Binput::get('link'),
                Binput::get('order'),
                Binput::get('group_id'),
                (bool) Binput::get('enabled'),
                Binput::get('meta', null),
                (bool) Binput::get('silent', false)
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        if (Binput::has('tags')) {
            $tags = preg_split('/ ?, ?/', Binput::get('tags'));

            // For every tag, do we need to create it?
            $componentTags = array_map(function ($taggable) use ($component) {
                return Tag::firstOrCreate(['name' => $taggable])->id;
            }, $tags);

            $component->tags()->sync($componentTags);
        }

        return $this->item($component);
    }

    /**
     * Delete an existing component.
     *
     * **Path params:**
     *
     * Name | Type | Required | Description
     * -----|------|------------
     * component | int32 | Y | Component ID
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @return \Illuminate\Http\JsonResponse
     *
     *
     * @SWG\Delete(
     *   path="/components/{component}",
     *   summary="Deletes a component",
     *   description="",
     *   operationId="destroy",
     *   tags={"Components"},
     *   @SWG\Parameter(
     *      description="Component id to delete",
     *      in="path",
     *      name="component",
     *      required=true,
     *      type="integer",
     *      format="int64"
     *   ),
     *   @SWG\Response(
     *      response=200,
     *      description="Ok"
     *   ),
     * )
     * 
     * 
     */
    public function destroy(Component $component)
    {
        dispatch(new RemoveComponentCommand($component));

        return $this->noContent();
    }
}
