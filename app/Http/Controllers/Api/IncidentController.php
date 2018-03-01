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

use CachetHQ\Cachet\Bus\Commands\Incident\CreateIncidentCommand;
use CachetHQ\Cachet\Bus\Commands\Incident\RemoveIncidentCommand;
use CachetHQ\Cachet\Bus\Commands\Incident\UpdateIncidentCommand;
use CachetHQ\Cachet\Models\Incident;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * The incident API controller.
 *
 * @resource Incident
 */
class IncidentController extends AbstractApiController
{
    /**
     * Get all incidents.
     *
     * The following searchable keys are available:
     * - `id`
     * - `component_id`
     * - `name`
     * - `status`
     * - `visible`
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $incidentVisibility = app(Guard::class)->check() ? 0 : 1;

        $incidents = Incident::where('visible', '>=', $incidentVisibility);

        $incidents->search(Binput::except(['sort', 'order', 'per_page']));

        if ($sortBy = Binput::get('sort')) {
            $direction = Binput::has('order') && Binput::get('order') == 'desc';

            $incidents->sort($sortBy, $direction);
        }

        $incidents = $incidents->paginate(Binput::get('per_page', 20));

        return $this->paginator($incidents, Request::instance());
    }

    /**
     * Get a single incident.
     *
     * **Path Params:**
     * 
     * Name | Type | Required | Description
     * -----|------|------------|---------
     * incident | int32 | Y | ID of the incident
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Incident $incident)
    {
        return $this->item($incident);
    }

    /**
     * Create a new incident.
     *
     * **Body params:**
     *
     * Name | Type | Required | Description
     * -----|------|------------|----------
     * name | string | Y | Name of the incident
     * message | string | Y | A message (supporting Markdown) to explain more
     * status | int32 | Y | Status of the incident
     * component_id | int32 | Y | Component to update (required with component_status)
     * component_status | int32 | Y | The status to update the given component with
     * visible | int32 | N | Whether the incident is publicly visible
     * notify | boolean | N | Whether to notify subscribers
     * stickied | boolean | N |Should the incident be stickied
     * template | string | The template slug to use
     * vars | string[] | N | The variables to pass to the template
     * meta | string[] | N | The meta
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store()
    {
        try {
            $incident = dispatch(new CreateIncidentCommand(
                Binput::get('name'),
                Binput::get('status'),
                Binput::get('message', null, false, false),
                Binput::get('visible', true),
                Binput::get('component_id'),
                Binput::get('component_status'),
                Binput::get('notify', true),
                Binput::get('stickied', false),
                Binput::get('occurred_at'),
                Binput::get('template'),
                Binput::get('vars', []),
                Binput::get('meta', [])
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($incident);
    }

    /**
     * Update an existing incident.
     *
     * **Path params:**
     *
     * Name | Type | Required | Description
     * -----|------|----------|------------
     * incident | int32 | Y | ID of the incident
     *
     * **Body params:**
     *
     * Name | Type | Required | Description
     * -----|------|----------|------------
     * name | string | Y | Name of the incident
     * message | string | Y | A message (supporting Markdown) to explain more
     * status | int32 | Y | Status of the incident
     * component_id | int32 | Y | Component to update (required for component_status)
     * component_status | int32 | Y | The status to update the given component with
     * occured_at | date | Y | When the incident occured
     * template | int32 | Y | The template ID
     * visible | int32 | N |Whether the incident is publicly visible
     * notify | boolean | N | Whether to notify subscribers
     * stickied | boolean | N | Whether the incident should be stikied
     * vars | string[] | N | The variables to pass to the template
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Incident $incident)
    {
        try {
            $incident = dispatch(new UpdateIncidentCommand(
                $incident,
                Binput::get('name'),
                Binput::get('status'),
                Binput::get('message'),
                Binput::get('visible', true),
                Binput::get('component_id'),
                Binput::get('component_status'),
                Binput::get('notify', true),
                Binput::get('stickied', false),
                Binput::get('occurred_at'),
                Binput::get('template'),
                Binput::get('vars', [])
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($incident);
    }

    /**
     * Delete an existing incident.
     *
     * **Path params:**
     *
     * Name | Type | Required | Description
     * -----|------|---------|-------------
     * incident | int32 | Y | Incident ID
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Incident $incident)
    {
        dispatch(new RemoveIncidentCommand($incident));

        return $this->noContent();
    }
}
