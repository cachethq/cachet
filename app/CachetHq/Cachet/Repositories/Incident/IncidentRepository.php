<?php

namespace CachetHq\Cachet\Repositories\Incident;

interface IncidentRepository
{

    public function all();

    public function create($id, array $array);

    public function findOrFail($id);

    public function update($id, array $with);
}
