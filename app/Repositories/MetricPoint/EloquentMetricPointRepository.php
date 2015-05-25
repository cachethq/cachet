<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Repositories\MetricPoint;

use CachetHQ\Cachet\Models\MetricPoint;
use CachetHQ\Cachet\Repositories\EloquentRepository;

class EloquentMetricPointRepository extends EloquentRepository implements MetricPointRepository
{
    /**
     * The eloquent model instance.
     *
     * @var \CachetHQ\Cachet\Models\MetricPoint
     */
    protected $model;

    /**
     * Create a new eloquent metric point repository instance.
     *
     * @param \CachetHQ\Cachet\Models\MetricPoint $model
     */
    public function __construct(MetricPoint $model)
    {
        $this->model = $model;
    }

    /**
     * Create a new model.
     *
     * @param int   $id
     * @param array $data
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create($id, array $data)
    {
        $data['metric_id'] = $id;
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
