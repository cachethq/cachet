<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Repositories\Metric;

use CachetHQ\Cachet\Models\Metric;
use CachetHQ\Cachet\Repositories\EloquentRepository;

class EloquentMetricRepository extends EloquentRepository implements MetricRepository
{
    /**
     * The eloquent model instance.
     *
     * @var \CachetHQ\Cachet\Models\Metric
     */
    protected $model;

    /**
     * Create a new eloquent metric repository instance.
     *
     * @param \CachetHQ\Cachet\Models\Metric $model
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

    /**
     * Returns all metric point models.
     *
     * @param int $id
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function points($id)
    {
        $metric = $this->model->findOrFail($id);

        return $metric->points;
    }
}
