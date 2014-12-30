<?php

namespace CachetHQ\Cachet\Repositories\Incident;

use CachetHQ\Cachet\Repositories\EloquentRepository;
use Incident;

class EloquentIncidentRepository extends EloquentRepository implements IncidentRepository
{
    protected $model;

    public function __construct(Incident $model)
    {
        $this->model = $model;
    }

    public function create($user_id, array $array)
    {
        $incident = new $this->model($array);
        $incident->user_id = $user_id;

        $this->validate($incident)->hasRelationship($incident, 'component');

        $incident->saveOrFail();

        return $incident;
    }

    public function update($id, array $array)
    {
        $incident = $this->model->findOrFail($id);
        $incident->fill($array);

        $this->validate($incident)->hasRelationship($incident, 'component');

        $incident->update($array);

        return $incident;
    }
}
