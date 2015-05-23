<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Api;

use CachetHQ\Cachet\Models\Metric;
use CachetHQ\Cachet\Models\MetricPoint;
use Exception;
use GrahamCampbell\Binput\Facades\Binput;

class MetricPointController extends AbstractApiController
{
    /**
     * Get a single metric point.
     *
     * @param \CachetHQ\Cachet\Models\Metric      $metric
     * @param \CachetHQ\Cachet\Models\MetricPoint $metricPoint
     *
     * @return \CachetHQ\Cachet\Models\MetricPoint
     */
    public function getMetricPoints(Metric $metric, MetricPoint $metricPoint)
    {
        return $this->item($metricPoint);
    }

    /**
     * Create a new metric point.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return \CachetHQ\Cachet\Models\MetricPoint
     */
    public function postMetricPoints(Metric $metric)
    {
        $metricPointData = Binput::all();
        $metricPointData['metric_id'] = $metric->id;

        try {
            $metricPoint = MetricPoint::create($metricPointData);
        } catch (Exception $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($metricPoint);
    }

    /**
     * Updates a metric point.
     *
     * @param \CachetHQ\Cachet\Models\Metric      $metric
     * @param \CachetHQ\Cachet\Models\MetircPoint $metricPoint
     *
     * @return \CachetHQ\Cachet\Models\MetricPoint
     */
    public function putMetricPoint(Metric $metric, MetricPoint $metricPoint)
    {
        $metricPoint->update(Binput::all());

        return $this->item($metricPoint);
    }

    /**
     * Destroys a metric point.
     *
     * @param \CachetHQ\Cachet\Models\Metric      $metric
     * @param \CachetHQ\Cachet\Models\MetricPoint $metricPoint
     *
     * @return \Dingo\Api\Http\Response
     */
    public function deleteMetricPoint(Metric $metric, MetricPoint $metricPoint)
    {
        $metricPoint->delete();

        return $this->noContent();
    }
}
