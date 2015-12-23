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

use CachetHQ\Cachet\Commands\Component\AddComponentCommand;
use CachetHQ\Cachet\Commands\Component\RemoveComponentCommand;
use CachetHQ\Cachet\Commands\Component\UpdateComponentCommand;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Tag;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class ComponentController extends AbstractApiController
{
    use DispatchesJobs;

    /**
     * Get all components.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getComponents()
    {
        if (app(Guard::class)->check()) {
            $components = Component::whereRaw('1 = 1');
        } else {
            $components = Component::enabled();
        }

        return $this->paginator($components->paginate(Binput::get('per_page', 20)), Request::instance());
    }

    /**
     * Get a single component.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getComponent(Component $component)
    {
        return $this->item($component);
    }

    /**
     * Create a new component.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postComponents()
    {
        try {
            $component = $this->dispatch(new AddComponentCommand(
                Binput::get('name'),
                Binput::get('description'),
                Binput::get('status'),
                Binput::get('link'),
                Binput::get('order'),
                Binput::get('group_id'),
                (bool) Binput::get('enabled', true)
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
     */
    public function putComponent(Component $component)
    {
        try {
            $this->dispatch(new UpdateComponentCommand(
                $component,
                Binput::get('name'),
                Binput::get('description'),
                Binput::get('status'),
                Binput::get('link'),
                Binput::get('order'),
                Binput::get('group_id'),
                (bool) Binput::get('enabled', true)
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
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteComponent(Component $component)
    {
        $this->dispatch(new RemoveComponentCommand($component));

        return $this->noContent();
    }
}
