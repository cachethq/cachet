<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Api;

use CachetHQ\Cachet\Models\Metric;
use Exception;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class MetricController extends AbstractApiController
{
    /**
     * Get all metrics.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getMetrics(Request $request)
    {
        $metrics = Metric::paginate(Binput::get('per_page', 20));

        return $this->paginator($metrics, $request);
    }

    /**
     * Get a single metric.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return \CachetHQ\Cachet\Models\Metric
     */
    public function getMetric(Metric $metric)
    {
        return $this->item($metric);
    }

    /**
     * Get all metric points.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getMetricPoints(Metric $metric)
    {
        return $this->collection($metric->points);
    }

    /**
     * Create a new metric.
     *
     * @return \CachetHQ\Cachet\Models\Metric
     */
    public function postMetrics()
    {
        try {
            $metric = Metric::create(Binput::all());
        } catch (Exception $e) {
            throw new BadRequestHttpException();
        }

        if ($metric->isValid()) {
            return $this->item($metric);
        }

        throw new BadRequestHttpException();
    }

    /**
     * Update an existing metric.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return \CachetHQ\Cachet\Models\Metric
     */
    public function putMetric(Metric $metric)
    {
        $metric->update(Binput::all());

        if ($metric->isValid('updating')) {
            return $this->item($metric);
        }

        throw new BadRequestHttpException();
    }

    /**
     * Delete an existing metric.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteMetric(Metric $metric)
    {
        $metric->delete();

        return $this->noContent();
    }
}
