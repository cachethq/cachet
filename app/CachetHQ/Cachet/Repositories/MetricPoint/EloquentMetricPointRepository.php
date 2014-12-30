<?php

namespace CachetHQ\Cachet\Repositories\MetricPoint;

use CachetHQ\Cachet\Repositories\EloquentRepository;
use MetricPoint;

class EloquentMetricPointRepository extends EloquentRepository implements MetricRepository
{
    protected $model;

    public function __construct(MetricPoint $model)
    {
        $this->model = $model;
    }

    public function create(array $array)
    {
        $metric = new $this->model($array);

        $this->validate($metric);

        $metric->saveOrFail();

        return $metric;
    }

    public function update($id, array $array)
    {
        $metric = $this->model->findOrFail($id);
        $metric->fill($array);

        $this->validate($metric);

        $metric->update($array);

        return $metric;
    }
}
