<?php

namespace CachetHQ\Cachet\Repositories\Metric;

interface MetricRepository
{
    public function all();

    public function create(array $array);

    public function findOrFail($id);

    public function update($id, array $with);
}
