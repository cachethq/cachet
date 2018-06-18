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
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *   path="/incidents",
     *   summary="List all incidents.",
     *   operationId="Incident@index",
     *   tags={"Incidents"},
     *   produces={"application/json"}, 
     *   @SWG\Parameter(
     *     description="Minimum visibility of the incidents.",
     *     in="query",
     *     name="visible",
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
     *     description="The direction on which sort the results. 'asc' or 'desc'.",
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
     *     description="A list with all incidents."
     *   )
     * )
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
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *   path="/incidents/{incident}",
     *   summary="Get a single incident.",
     *   description="",
     *   operationId="Incident@show",
     *   produces={"application/json"},
     *   tags={"Incidents"},
     *   @SWG\Parameter(
     *     name="incident",
     *     in="path",
     *     description="The incident identifier.",
     *     required=true,
     *     type="integer",
     *     format="int64"
     *   ),
     *   @SWG\Response(
     *     response=200,
     *     description="The incident."
     *   ),
     *   @SWG\Response(
     *     response="404",
     *     description="Incident not found."
     *   )
     * )
     */
    public function show(Incident $incident)
    {
        return $this->item($incident);
    }

    /**
     * Create a new incident.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Post(
     *   path="/incidents",
     *   tags={"Incidents"},
     *   operationId="Incident@store",
     *   summary="Add a new incident.",
     *   description="",
     *   consumes={"multipart/form-data"},
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     name="name",
     *     in="formData",
     *     type="string",
     *     description="Name of the incident.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="message",
     *     in="formData",
     *     type="string",
     *     description="A message (supporting Markdown) to explain more.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="status",
     *     in="formData",
     *     type="integer",
     *     description="Status of the incident.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="component_id",
     *     in="formData",
     *     type="integer",
     *     description="Component to update.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="component_status",
     *     in="formData",
     *     type="integer",
     *     description="The status to update the given component with.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="occured_at",
     *     in="formData",
     *     type="string",
     *     description="The date/time when the incident occured.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="template",
     *     in="formData",
     *     type="string",
     *     description="The templace slug to use.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="notify",
     *     in="formData",
     *     type="boolean",
     *     description="Whether to notify subscribers. Default true.",
     *     required=false
     *   ),
     *   @SWG\Parameter(
     *     name="stickied",
     *     in="formData",
     *     type="integer",
     *     description="Should the incident be stickied? Default false.",
     *     required=false
     *   ),
     *   @SWG\Parameter(
     *     name="vars",
     *     in="formData",
     *     type="array",
     *     description="",
     *     required=false,
     *     @SWG\Items(
     *       type="string"
     *     )
     *   ),
     *   @SWG\Parameter(
     *     name="meta",
     *     in="formData",
     *     type="array",
     *     description="",
     *     required=false,
     *     @SWG\Items(
     *       type="string"
     *     )
     *   ),
     *   @SWG\Response(
     *     response=200,
     *     description="The incident."
     *   ),
     *   @SWG\Response(
     *     response=400,
     *     description="Invalid incident."
     *   )
     * )
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
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Put(
     *   path="/incidents/{incident}",
     *   tags={"Incidents"},
     *   operationId="Incident@update",
     *   summary="Update an existing incident.",
     *   description="",
     *   consumes={"multipart/form-data"},
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     name="incident",
     *     in="path",
     *     type="integer",
     *     description="Identifier of the incident to update.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="name",
     *     in="formData",
     *     type="string",
     *     description="Name of the incident.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *      name="message",
     *      in="formData",
     *      type="string",
     *      description="A message (supporting Markdown) to explain more",
     *      required=true
     *   ),
     *   @SWG\Parameter(
     *     name="status",
     *     in="formData",
     *     type="integer",
     *     description="Status of the incident.",
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
     *     description="The status to update the component with.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="occured_at",
     *     in="formData",
     *     type="string",
     *     description="The date when the incident occured.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="template",
     *     in="formData",
     *     type="integer",
     *     description="The template identifier",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="visible",
     *     in="formData",
     *     type="integer",
     *     description="Whether the incident should be visible.",
     *     required=false
     *   ),
     *   @SWG\Parameter(
     *     name="notify",
     *     in="formData",
     *     type="boolean",
     *     description="Whether to notify the subscribers.",
     *     required=false
     *   ),
     *   @SWG\Parameter(
     *     name="stickied",
     *     in="formData",
     *     type="boolean",
     *     description="Whether the incident should be stickied.",
     *     required=false
     *   ),
     *   @SWG\Parameter(
     *     name="vars",
     *     in="formData",
     *     type="array",
     *     items="string",
     *     description="The variables to give to the template.",
     *     required=false
     *   ),
     *   @SWG\Response(
     *     response=200,
     *     description="The incident."
     *   ),
     *   @SWG\Response(
     *     response=400,
     *     description="Invalid incident."
     *   )
     * )

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
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Delete(
     *   path="/incidents/{incident}",
     *   summary="Deletes an incident.",
     *   description="",
     *   operationId="Incident@destroy",
     *   tags={"Incidents"},
     *   @SWG\Parameter(
     *     description="Incident id to delete.",
     *     in="path",
     *     name="incident",
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
    public function destroy(Incident $incident)
    {
        dispatch(new RemoveIncidentCommand($incident));

        return $this->noContent();
    }
}
