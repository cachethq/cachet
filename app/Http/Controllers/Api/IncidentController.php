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

use CachetHQ\Cachet\Bus\Commands\Incident\RemoveIncidentCommand;
use CachetHQ\Cachet\Bus\Commands\Incident\ReportIncidentCommand;
use CachetHQ\Cachet\Bus\Commands\Incident\UpdateIncidentCommand;
use CachetHQ\Cachet\Models\Incident;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class IncidentController extends AbstractApiController
{
    /**
     * Get all incidents.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getIncidents()
    {
        $incidentVisibility = app(Guard::class)->check() ? 0 : 1;

        $incidents = Incident::where('visible', '>=', $incidentVisibility)->paginate(Binput::get('per_page', 20));

        return $this->paginator($incidents, Request::instance());
    }

    /**
     * Get a single incident.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getIncident(Incident $incident)
    {
        return $this->item($incident);
    }

    /**
     * Create a new incident.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postIncidents()
    {
        try {
            $incident = dispatch(new ReportIncidentCommand(
                Binput::get('name'),
                Binput::get('status'),
                Binput::get('message'),
                Binput::get('visible', true),
                Binput::get('component_id'),
                Binput::get('component_status'),
                Binput::get('notify', true),
                Binput::get('created_at'),
                Binput::get('template'),
                Binput::get('vars')
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
     */
    public function putIncident(Incident $incident)
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
                Binput::get('created_at'),
                Binput::get('template'),
                Binput::get('vars')
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
     */
    public function deleteIncident(Incident $incident)
    {
        dispatch(new RemoveIncidentCommand($incident));

        return $this->noContent();
    }
}
