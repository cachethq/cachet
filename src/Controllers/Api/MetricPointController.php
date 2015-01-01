<?php

namespace CachetHQ\Cachet\Controllers\Api;

use CachetHQ\Cachet\Repositories\MetricPoint\MetricPointRepository;
use Dingo\Api\Routing\ControllerTrait;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;

class MetricPointController extends Controller
{
    use ControllerTrait;

    /**
     * The metric point repository instance.
     *
     * @var \CachetHQ\Cachet\Repositories\MetricPoint\MetricPointRepository
     */
    protected $metricPoint;

    /**
     * Create a new metric point controller instance.
     *
     * @param \CachetHQ\Cachet\Repositories\MetricPoint\MetricPointRepository $metricPoint
     *
     * @return void
     */
    public function __construct(MetricPointRepository $metricPoint)
    {
        $this->metricPoint = $metricPoint;
    }
    /**
     * Get all metric points.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getMetricPoints()
    {
        return $this->metricPoint->all();
    }

    /**
     * Get a single metric point.
     *
     * @param int $id
     *
     * @return \MetricPoint
     */
    public function getMetricPoint($id)
    {
        return $this->metricPoint->findOrFail($id);
    }

    /**
     * Create a new metric point.
     *
     * @return \MetricPoint
     */
    public function postMetricPoints()
    {
        return $this->metricPoint->create(Input::all());
    }
}
