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

use CachetHQ\Cachet\Commands\Incident\RemoveIncidentCommand;
use CachetHQ\Cachet\Commands\Incident\ReportIncidentCommand;
use CachetHQ\Cachet\Commands\Incident\UpdateIncidentCommand;
use CachetHQ\Cachet\Models\Incident;
use Exception;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class IncidentController extends AbstractApiController
{
    use DispatchesJobs;

    /**
     * Get all incidents.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \Illuminate\Contracts\Auth\Guard          $auth
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getIncidents(Request $request, Guard $auth)
    {
        $incidentVisiblity = $auth->check() ? 0 : 1;

        $incidents = Incident::where('visible', '>=', $incidentVisiblity)->paginate(Binput::get('per_page', 20));

        return $this->paginator($incidents, $request);
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
     * @param \Illuminate\Contracts\Auth\Guard $auth
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postIncidents(Guard $auth)
    {
        try {
            $incident = $this->dispatch(new ReportIncidentCommand(
                Binput::get('name'),
                Binput::get('status'),
                Binput::get('message'),
                Binput::get('visible', true),
                Binput::get('component_id'),
                Binput::get('component_status'),
                Binput::get('notify', true),
                Binput::get('created_at')
            ));
        } catch (Exception $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($incident);
    }

    /**
     * Update an existing incident.
     *
     * @param \CachetHQ\Cachet\Models\Inicdent $incident
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function putIncident(Incident $incident)
    {
        try {
            $incident = $this->dispatch(new UpdateIncidentCommand(
                $incident,
                Binput::get('name'),
                Binput::get('status'),
                Binput::get('message'),
                Binput::get('visible', true),
                Binput::get('component_id'),
                Binput::get('component_status'),
                Binput::get('notify', true),
                Binput::get('created_at')
            ));
        } catch (Exception $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($incident);
    }

    /**
     * Delete an existing incident.
     *
     * @param \CachetHQ\Cachet\Models\Inicdent $incident
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteIncident(Incident $incident)
    {
        $this->dispatch(new RemoveIncidentCommand($incident));

        return $this->noContent();
    }
}
