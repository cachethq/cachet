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
     * The following searchable keys are available:
     * - `id`
     * - `name`
     * - `status`
     * - `group_id`
     * - `enabled`
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
     * **Path params:**
     *
     * Name | Type | Required | Description
     * -----|------|------------
     * component | int32 | Y | The component identifier
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Component $component)
    {
        return $this->item($component);
    }

    /**
     * Create a new component.
     *
     * **Body params:**
     *
     *  Name | Type | Required | Description
     *  -----|------|------------
     *  name | string | Y | Name of the component
     *  description| string | Y | Description of the component
     *  status | int32` | Y | Status of the component (Between 1 and 4)
     *  link | string | Y | A hyperlink to the component
     *  order | int32 | Y | Order of the component
     *  group_id | int32 | Y | The group identifier that the component is within
     *  enabled | boolean | N | Whether the component is enabled
     *
     * @return \Illuminate\Http\JsonResponse
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
     * **Path params:**
     *
     * Name | Type | Required | Description
     * -----|------|------------
     * component | int32 | Y | The identifier of the component to update
     *
     * **Body params:**
     *
     * Name | Type | Required | Description
     * -----|------|------------
     * name | string | Y | Name of the component
     * status | int32 | Y | Status of the component (between 1 and 4)
     * link | string | Y | A hyperlink to the component
     * order | int32 | Y | Order of the component
     * group_id | int32 | Y | The group id that the component is within
     * enabled | boolean | N | Whether the component is enabled
     * 
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @return \Illuminate\Http\JsonResponse
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
     */
    public function destroy(Component $component)
    {
        dispatch(new RemoveComponentCommand($component));

        return $this->noContent();
    }
}
