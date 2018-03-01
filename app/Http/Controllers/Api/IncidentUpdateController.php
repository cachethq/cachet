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

use CachetHQ\Cachet\Bus\Commands\IncidentUpdate\CreateIncidentUpdateCommand;
use CachetHQ\Cachet\Bus\Commands\IncidentUpdate\RemoveIncidentUpdateCommand;
use CachetHQ\Cachet\Bus\Commands\IncidentUpdate\UpdateIncidentUpdateCommand;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentUpdate;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * This is the incident update controller.
 *
 * @author James Brooks <james@alt-three.com>
 * @resource IncidentUpdate
 */
class IncidentUpdateController extends AbstractApiController
{
    /**
     * Return all updates for the incident.
     *
     * **Path params:**
     *
     * Name | Type | Required | Description
     * -----|------|----------|------------
     * incident | int32 | Y | Incident ID
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Incident $incident)
    {
        $updates = $incident->updates()->orderBy('created_at', 'desc');

        if ($sortBy = Binput::get('sort')) {
            $direction = Binput::has('order') && Binput::get('order') == 'desc';

            $updates->sort($sortBy, $direction);
        }

        $updates = $updates->paginate(Binput::get('per_page', 20));

        return $this->paginator($updates, Request::instance());
    }

    /**
     * Return a single incident update.
     *
     * **Path params:**
     *
     * Name | Type | Required | Description
     * -----|------|----------|-------------
     * incident | int32 | Y | Incident ID
     * update | int32 | Y | Incident update ID
     *
     * @param \CachetHQ\Cachet\Models\Incident       $incident
     * @param \CachetHQ\Cachet\Models\IncidentUpdate $update
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Incident $incident, IncidentUpdate $update)
    {
        return $this->item($update);
    }

    /**
     * Create a new incident update.
     *
     * **Path params:**
     *
     * Name | Type | Required | Description
     * -----|------|----------|------------
     * incident | int32 | Y | Incident ID
     *
     * **Query params:**
     *
     * Name | Type | Required | Description
     * -----|------|----------|------------
     * status | int32 | Y | Incident status level
     * message | string | Y | Incident update text
     * component_id | int32 | Y | Component id
     * component_status | int32 | Y | Component status
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Incident $incident)
    {
        try {
            $update = dispatch(new CreateIncidentUpdateCommand(
                $incident,
                Binput::get('status'),
                Binput::get('message'),
                Binput::get('component_id'),
                Binput::get('component_status'),
                Auth::user()
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($update);
    }

    /**
     * Update an incident update.
     *
     * **Path params:**
     *
     * Name | Type | Required | Description
     * -----|------|----------|------------
     * incident | int32 | Y | The incident the update belongs to
     * update | int32 | Y | The incident update id
     *
     * **Query params:**
     *
     * Name | Type | Required | Description
     * -----|------|----------|------------
     * status | int32 | Y | The incident status flag
     * message | string | Y | The update message
     *
     * @param \CachetHQ\Cachet\Models\Incident       $incident
     * @param \CachetHQ\Cachet\Models\IncidentUpdate $update
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Incident $incident, IncidentUpdate $update)
    {
        try {
            $update = dispatch(new UpdateIncidentUpdateCommand(
                $update,
                Binput::get('status'),
                Binput::get('message'),
                Auth::user()
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($update);
    }

    /**
     * Create a new incident update.
     *
     * **Path params:**
     *
     * Name | Type | Required | Description
     * -----|------|----------|------------
     * incident | int32 | Y | Incident the update belongs to
     * update | int32 | Y | The incident update ID to delete
     *
     * @param \CachetHQ\Cachet\Models\Incident       $incident
     * @param \CachetHQ\Cachet\Models\IncidentUpdate $update
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Incident $incident, IncidentUpdate $update)
    {
        try {
            dispatch(new RemoveIncidentUpdateCommand($update));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->noContent();
    }
}
