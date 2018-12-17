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
use CachetHQ\Cachet\Bus\Commands\Tag\ApplyTagCommand;
use CachetHQ\Cachet\Bus\Commands\Tag\CreateTagCommand;
use CachetHQ\Cachet\Models\Component;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\QueryException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class ComponentController extends AbstractApiController
{
    /**
     * Get all components.
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

        if ($tags = Binput::get('tags')) {
            $components->withAnyTags($tags);
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
     */
    public function show(Component $component)
    {
        return $this->item($component);
    }

    /**
     * Create a new component.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store()
    {
        try {
            $component = execute(new CreateComponentCommand(
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
            $component->tags()->delete();

            // The component was added successfully, so now let's deal with the tags.
            Collection::make(preg_split('/ ?, ?/', $tags))->map(function ($tag) {
                return trim($tag);
            })->map(function ($tag) {
                return execute(new CreateTagCommand($tag));
            })->each(function ($tag) use ($component) {
                execute(new ApplyTagCommand($component, $tag));
            });
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
    public function update(Component $component)
    {
        try {
            execute(new UpdateComponentCommand(
                $component,
                Binput::get('name'),
                Binput::get('description'),
                Binput::get('status'),
                Binput::get('link'),
                Binput::get('order'),
                Binput::get('group_id'),
                Binput::get('enabled', $component->enabled),
                Binput::get('meta', null),
                (bool) Binput::get('silent', false)
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        if (Binput::has('tags')) {
            $component->tags()->delete();

            // The component was added successfully, so now let's deal with the tags.
            Collection::make(preg_split('/ ?, ?/', $tags))->map(function ($tag) {
                return trim($tag);
            })->map(function ($tag) {
                return execute(new CreateTagCommand($tag));
            })->each(function ($tag) use ($component) {
                execute(new ApplyTagCommand($component, $tag));
            });
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
    public function destroy(Component $component)
    {
        execute(new RemoveComponentCommand($component));

        return $this->noContent();
    }
}
