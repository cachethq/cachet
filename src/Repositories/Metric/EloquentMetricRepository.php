<?php

namespace CachetHQ\Cachet\Repositories\Metric;

use CachetHQ\Cachet\Repositories\EloquentRepository;
use Metric;

class EloquentMetricRepository extends EloquentRepository implements MetricRepository
{
    /**
     * Create a new eloquent metric repository instance.
     *
     * @param \Metric $model
     *
     * @return void
     */
    public function __construct(Metric $model)
    {
        $this->model = $model;
    }

    /**
     * Create a new model.
     *
     * @param array $data
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create(array $data)
    {
        $metric = new $this->model($data);

        $this->validate($metric);

        $metric->saveOrFail();

        return $metric;
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
        $metric = $this->model->findOrFail($id);
        $metric->fill($data);

        $this->validate($metric);

        $metric->update($data);

        return $metric;
    }
}
