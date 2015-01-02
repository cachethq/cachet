<?php

namespace CachetHQ\Cachet\Http\Controllers\Api;

use CachetHQ\Cachet\Repositories\Incident\IncidentRepository;
use Dingo\Api\Routing\ControllerTrait;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;

class IncidentController extends Controller
{
    use ControllerTrait;

    /**
     * The incident repository instance.
     *
     * @var \CachetHQ\Cachet\Repositories\Incident\IncidentRepository
     */
    protected $incident;

    /**
     * Create a new incident controller instance.
     *
     * @param \CachetHQ\Cachet\Repositories\Incident\IncidentRepository $incident
     *
     * @return void
     */
    public function __construct(IncidentRepository $incident)
    {
        $this->incident = $incident;
    }

    /**
     * Get all incidents.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getIncidents()
    {
        return $this->incident->all();
    }

    /**
     * Get a single incident.
     *
     * @param int $id
     *
     * @return \CachetHQ\Cachet\Models\Incident
     */
    public function getIncident($id)
    {
        return $this->incident->findOrFail($id);
    }

    /**
     * Create a new incident.
     *
     * @return \CachetHQ\Cachet\Models\Incident
     */
    public function postIncidents()
    {
        return $this->incident->create($this->auth->user()->id, Input::all());
    }

    /**
     * Update an existing incident.
     *
     * @param int $id
     *
     * @return \CachetHQ\Cachet\Models\Incident
     */
    public function putIncident($id)
    {
        return $this->incident->update($id, Input::all());
    }
}
