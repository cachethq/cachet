<?php

namespace CachetHQ\Cachet\Controllers\Api;

use Input;
use Dingo\Api\Routing\ControllerTrait;
use Illuminate\Routing\Controller;
use CachetHQ\Cachet\Repositories\MetricPoint\MetricPointRepository;

class MetricController extends Controller {

    use ControllerTrait;

    protected $metricpoint;

    public function __construct(MetricPointRepository $metricpoint) {
        $this->metricpoint = $metricpoint;
    }
    /**
     * Get all metric points
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getMetricPoints() {
        return $this->metricpoint->all();
    }

    /**
     * Get a single metric point
     *
     * @param int $id
     *
     * @return MetricPoint
     */
    public function getMetricPoint($id) {
        return $this->metricpoint->findOrFail($id);
    }

    /**
     * Create a new metric point
     *
     * @return MetricPoint
     */
    public function postMetricPoints() {
        return $this->metricpoint->create(Input::all());
    }
}
