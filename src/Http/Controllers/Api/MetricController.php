<?php

namespace CachetHQ\Cachet\Http\Controllers\Api;

use CachetHQ\Cachet\Repositories\Metric\MetricRepository;
use Dingo\Api\Routing\ControllerTrait;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;

class MetricController extends Controller
{
    use ControllerTrait;

    /**
     * The metric repository instance.
     *
     * @var \CachetHQ\Cachet\Repositories\Metric\MetricRepository
     */
    protected $metric;

    /**
     * Create a new metric controller instance.
     *
     * @param \CachetHQ\Cachet\Repositories\Metric\MetricRepository $metric
     *
     * @return void
     */
    public function __construct(MetricRepository $metric)
    {
        $this->metric = $metric;
    }
    /**
     * Get all metrics.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getMetrics()
    {
        return $this->metric->all();
    }

    /**
     * Get a single metric.
     *
     * @param int $id
     *
     * @return \CachetHQ\Cachet\Models\Metric
     */
    public function getMetric($id)
    {
        return $this->metric->findOrFail($id);
    }

    /**
     * Create a new metric.
     *
     * @return \CachetHQ\Cachet\Models\Metric
     */
    public function postMetrics()
    {
        return $this->metric->create(Input::all());
    }

    /**
     * Update an existing metric.
     *
     * @param int $id
     *
     * @return \CachetHQ\Cachet\Models\Metric
     */
    public function putMetric($id)
    {
        return $this->metric->update($id, Input::all());
    }
}
