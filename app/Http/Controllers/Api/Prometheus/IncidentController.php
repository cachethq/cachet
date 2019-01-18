<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Api\Prometheus;

use CachetHQ\Cachet\Bus\Commands\Incident\CreateIncidentCommand;
use CachetHQ\Cachet\Bus\Commands\Incident\UpdateIncidentCommand;
use CachetHQ\Cachet\Bus\Commands\IncidentUpdate\CreateIncidentUpdateCommand;
use CachetHQ\Cachet\Http\Controllers\Api\AbstractApiController;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Schedule;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;

class IncidentController extends AbstractApiController
{
    /**
     * Create a new incident.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store()
    {
        Log::debug(__METHOD__." called ", Binput::all());

        $alerts = collect(Binput::get("alerts"));
        if (!$alerts->count()) {
            throw new BadRequestHttpException();
        }
        $alerts->each(function ($alert) {
            switch ($alert["status"]) {
                case "firing":
                    $this->handleFiringAlert($alert);
                    break;
                case "resolved":
                    $this->handleResolvedAlert($alert);
                    break;
                default:
                    throw new BadRequestHttpException("Unsupported alert status.");
            }
        });

        return response(200);
    }

    /**
     * creates an incident for the given component and sets
     * the component's status to "performance problems"
     *
     * @param     array    $alert    the prometheus alert to handle
     * @return    void
     */
    protected function handleFiringAlert(array $alert)
    {
        $componentId = $this->getComponentId($alert);

        $component = Component::findOrFail($componentId);
        if ($component->status != 1) {
            // the component is not in the status "operational"
            // do not create an incident
            return;
        }

        if (Schedule::inProgress()->count()) {
            // a scheduled maintenance is currently in progress
            // do not create an incident
            return;
        }

        execute(new CreateIncidentCommand(
            data_get($alert, "annotations.summary", trans("prometheus.default-alert-name")),
            config("prometheus.new_incident_status", 1) /*incident status */,
            data_get($alert, "annotations.description", trans("prometheus.default-alert-message")) /* message */,
            config("prometheus.new_incident_visible", true) /*visible*/,
            $componentId,
            config("prometheus.new_incident_component_status", 2) /* component status */,
            config("prometheus.new_incident_notify", true) /* notify */,
            config("prometheus.new_incident_stickied", false) /*stickied*/,
            $this->formatPrometheusDate(data_get($alert, "startsAt")) /* occurred_at */,
            config("prometheus.new_incident_template", null) /*template slug*/,
            [] /*template vars */,
            data_get($alert, config("prometheus.meta_key", "labels")) /*meta*/
        ));
    }

    /**
     * clears a given incident for the given component
     * the incident is matched by comparing the "startsAt" field
     * in the prometheus alert with the "occurred_at" timestamp
     *
     * @param     array     $alert    the prometheus alert to handle
     * @return    void
     */
    protected function handleResolvedAlert(array $alert)
    {
        $componentId = $this->getComponentId($alert);

        $component = Component::findOrFail($componentId);
        if ($component->status == 1) {
            return;
        }

        $startsAt = $this->formatPrometheusDate(data_get($alert, "startsAt"));

        $incident = $component->incidents()
            ->where("status", config("prometheus.new_incident_status", 1))
            ->where("occurred_at", $startsAt.":00")->first();

        if (!$incident) {
            return;
        }

        execute(new CreateIncidentUpdateCommand(
            $incident,
            config("prometheus.resolved_incident_status", 4) /* status */,
            trans("prometheus.default-resolved-alert-message"),
            $componentId,
            config("prometheus.resolved_incident_component_status", 1) /* component status */,
            request()->user()
        ));

        return;
    }

    /**
     * takes a date coming from prometheus and prepares it for
     * use in Cachet's commands
     *
     * @param     string    $date         the date coming from prometheus
     * @param     string    $newFormat    the new format of the date
     * @return    string                  the date suitable for use in the *Command-classes
     */
    protected function formatPrometheusDate(string $date, string $newFormat = "Y-m-d H:i")
    {
        //remove nanoseconds
        $date = preg_replace("/\.([\d]{6})([\d]+)/", ".\\1", $date);
        return Carbon::createFromFormat("Y-m-d\TH:i:s.uP", $date)->format($newFormat);
    }

    /**
     * extracts the component_id from prometheus' labels
     *
     * @throws \Symfony\Component\HttpKernel\Exception\BadRequestHttpException when the component id cannot be found
     *
     * @param     array    $alert    the alert that contains the component_id
     * @return    int                the component id
     */
    protected function getComponentId($alert)
    {
        if (!$componentId = (int) data_get($alert, "labels.status_page_component_id")) {
            throw new BadRequestHttpException("No status_page_component_id given.");
        }
        return $componentId;
    }
}
