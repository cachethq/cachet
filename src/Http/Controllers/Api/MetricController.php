<?php

namespace CachetHQ\Cachet\Http\Controllers\Api;

use CachetHQ\Cachet\Repositories\InvalidModelValidationException;
use CachetHQ\Cachet\Repositories\Metric\MetricRepository;
use Dingo\Api\Routing\ControllerTrait;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;

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
        try {
            return $this->metric->create(Binput::all());
        } catch (InvalidModelValidationException $e) {
            return $this->response->errorBadRequest();
        }
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
        try {
            $this->metric->update($id, Binput::all());
        } catch (InvalidModelValidationException $e) {
            return $this->response->errorBadRequest();
        }
    }

    /**
     * Delete an existing metric.
     *
     * @param int $id
     *
     * @return \Dingo\Api\Http\Response
     */
    public function deleteMetric($id)
    {
        $this->metric->destroy($id);

        return $this->response->noContent();
    }
}
