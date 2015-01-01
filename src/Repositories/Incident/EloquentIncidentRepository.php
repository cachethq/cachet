<?php

namespace CachetHQ\Cachet\Repositories\Incident;

use CachetHQ\Cachet\Repositories\EloquentRepository;
use Incident;

class EloquentIncidentRepository extends EloquentRepository implements IncidentRepository
{
    /**
     * The eloquent model instance.
     *
     * @var \Incident
     */
    protected $model;

    /**
     * Create a new eloquent incident repository instance.
     *
     * @param \Incident $model
     *
     * @return void
     */
    public function __construct(Incident $model)
    {
        $this->model = $model;
    }

    /**
     * Create a new model.
     *
     * @param int   $userId
     * @param array $data
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create($userId, array $data)
    {
        $incident = new $this->model($data);
        $incident->user_id = $userId;
        $this->validate($incident);

        if (isset($data['component_id'])) {
            $this->hasRelationship($incident, 'component');
        }

        $incident->saveOrFail();

        return $incident;
    }

    /**
     * Update a model by id.
     *
     * @param int   $id
     * @param array $data
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($id, array $data)
    {
        $incident = $this->model->findOrFail($id);
        $incident->fill($data);
        $this->validate($incident);

        if (isset($data['component_id'])) {
            $this->hasRelationship($incident, 'component');
        }

        $incident->update($data);

        return $incident;
    }
}
