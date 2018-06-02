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
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *   path="/incidents/{incident}/updates",
     *   summary="List all updates for a component.",
     *   operationId="IncidentUpdates@index",
     *   tags={"IncidentUpdates"},
     *   produces={"application/json"}, 
     *   @SWG\Parameter(
     *     description="ID of the incident to filter the updates.",
     *     in="path",
     *     name="incident",
     *     required=true,
     *     type="integer",
     *     format="int64"
     *   ),
     *   @SWG\Response(
     *     response=200,
     *     description="A list with all incident updates for the given incident."
     *   )
     * )
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
     * @param \CachetHQ\Cachet\Models\Incident       $incident
     * @param \CachetHQ\Cachet\Models\IncidentUpdate $update
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *   path="/incidents/{incident}/updates/{update}",
     *   summary="Get a single incident update.",
     *   tags={"IncidentUpdates"},
     *   operationId="IncidentUpdates@show",
     *   @SWG\Parameter(
     *     description="ID of incident.",
     *     in="path",
     *     name="incident",
     *     required=true,
     *     type="integer",
     *     format="int64"
     *  ),
     *  @SWG\Parameter(
     *     description="ID of update.",
     *     in="path",
     *     name="update",
     *     required=true,
     *     type="integer",
     *     format="int64"
     *  ),
     *  @SWG\Response(
     *     response=200,
     *     description="A single incident update."
     *   )
     * )
     */
    public function show(Incident $incident, IncidentUpdate $update)
    {
        return $this->item($update);
    }

    /**
     * Create a new incident update.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Post(
     *   path="/incidents/{incident}",
     *   tags={"IncidentUpdates"},
     *   operationId="IncidentUpdates@store",
     *   summary="Add a new incident update.",
     *   description="",
     *   consumes={"multipart/form-data"},
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     name="incident",
     *     in="path",
     *     type="integer",
     *     description="ID of the incident.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="status",
     *     in="formData",
     *     type="integer",
     *     description="Incident status level.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="message",
     *     in="formData",
     *     type="string",
     *     description="Incident update text.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="component_id",
     *     in="formData",
     *     type="integer",
     *     description="The ID of the component to update.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="component_status",
     *     in="formData",
     *     type="integer",
     *     description="The component status.",
     *     required=true
     *   ),
     *   @SWG\Response(
     *     response=200,
     *     description="The incident update."
     *   ),
     *   @SWG\Response(
     *     response=400,
     *     description="Invalid incident update."
     *   )
     * )
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
     * @param \CachetHQ\Cachet\Models\Incident       $incident
     * @param \CachetHQ\Cachet\Models\IncidentUpdate $update
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Put(
     *   path="/incidents/{incident}/updates/{update}",
     *   tags={"IncidentUpdates"},
     *   operationId="IncidentUpdates@update",
     *   summary="Update an existing incident update.",
     *   description="",
     *   consumes={"multipart/form-data"},
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     name="incident",
     *     in="path",
     *     type="integer",
     *     description="Identifier of the incident.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="update",
     *     in="path",
     *     type="integer",
     *     description="Identifier of the update.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="status",
     *     in="formData",
     *     type="string",
     *     description="The incident status flag.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="message",
     *     in="formData",
     *     type="string",
     *     description="The incident update text.",
     *     required=true
     *   ),
     *   @SWG\Response(
     *     response=200,
     *     description="The incident update."
     *   ),
     *   @SWG\Response(
     *     response=400,
     *     description="Invalid incident update."
     *   )
     * )
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
     * @param \CachetHQ\Cachet\Models\Incident       $incident
     * @param \CachetHQ\Cachet\Models\IncidentUpdate $update
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Delete(
     *   path="/incidents/{incident}/updates/{update}",
     *   summary="Deletes an incident update.",
     *   description="",
     *   operationId="IncidentUpdates@destroy",
     *   tags={"IncidentUpdates"},
     *   @SWG\Parameter(
     *     description="Incident id.",
     *     in="path",
     *     name="incident",
     *     required=true,
     *     type="integer",
     *     format="int64"
     *   ),
     *   @SWG\Parameter(
     *     description="Incident update to delete.",
     *     in="path",
     *     name="update",
     *     required=true,
     *     type="integer",
     *     format="int64"
     *   ),
     *   @SWG\Response(
     *     response=204,
     *     description="Ok."
     *   ),
     * )
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
