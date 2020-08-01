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
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\QueryException;
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

        if ($tags = request('tags')) {
            $components->withAnyTags($tags);
        }

        $components->search(request()->except(['sort', 'order', 'per_page']));

        if ($sortBy = request('sort')) {
            $direction = request()->has('order') && request('order') == 'desc';

            $components->sort($sortBy, $direction);
        }

        $components = $components->paginate(request('per_page', 20));

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
                request('name'),
                request('description'),
                request('status'),
                request('link'),
                request('order'),
                request('group_id'),
                (bool) request('enabled', true),
                request('meta'),
                request('tags')
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
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
                request('name'),
                request('description'),
                request('status'),
                request('link'),
                request('order'),
                request('group_id'),
                request('enabled', $component->enabled),
                request('meta'),
                request('tags'),
                (bool) request('silent', false)
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
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
