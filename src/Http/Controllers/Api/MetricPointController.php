<?php

namespace CachetHQ\Cachet\Http\Controllers\Api;

use CachetHQ\Cachet\Repositories\MetricPoint\MetricPointRepository;
use Dingo\Api\Routing\ControllerTrait;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;

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
     * Get a single metric point.
     *
     * @param int $id
     *
     * @return \CachetHQ\Cachet\Models\MetricPoint
     */
    public function getMetricPoints($id)
    {
        return $this->metricPoint->findOrFail($id);
    }

    /**
     * Create a new metric point.
     *
     * @param int $id
     *
     * @return \CachetHQ\Cachet\Models\MetricPoint
     */
    public function postMetricPoints($id)
    {
        return $this->metricPoint->create($id, Binput::all());
    }
}
