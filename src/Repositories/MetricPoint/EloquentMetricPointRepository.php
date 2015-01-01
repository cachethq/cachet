<?php

namespace CachetHQ\Cachet\Repositories\MetricPoint;

use CachetHQ\Cachet\Repositories\EloquentRepository;
use MetricPoint;

class EloquentMetricPointRepository extends EloquentRepository implements MetricPointRepository
{
    /**
     * The eloquent model instance.
     *
     * @var \MetricPoint
     */
    protected $model;

    /**
     * Create a new eloquent metric point repository instance.
     *
     * @param \MetricPoint $model
     *
     * @return void
     */
    public function __construct(MetricPoint $model)
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
