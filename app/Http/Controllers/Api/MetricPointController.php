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

use CachetHQ\Cachet\Bus\Commands\Metric\CreateMetricPointCommand;
use CachetHQ\Cachet\Bus\Commands\Metric\RemoveMetricPointCommand;
use CachetHQ\Cachet\Bus\Commands\Metric\UpdateMetricPointCommand;
use CachetHQ\Cachet\Models\Metric;
use CachetHQ\Cachet\Models\MetricPoint;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * The MetricPoint API controller.
 *
 * @resource MetricPoint
 */
class MetricPointController extends AbstractApiController
{
    /**
     * Get all point for a metric.
     *
     * **Path params:**
     *
     * Name | Type | Required | Description
     * -----|------|----------|------------
     * metric | int32 | Y | Metric ID
     *
     * @param \CachetHQ\Cachet\Models\Metric      $metric
     * @param \CachetHQ\Cachet\Models\MetricPoint $metricPoint
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Metric $metric, MetricPoint $metricPoint)
    {
        $points = $metric->points()->paginate(Binput::get('per_page', 20));

        return $this->paginator($points, Request::instance());
    }

    /**
     * Create a new metric point.
     *
     * **Path params:**
     *
     * Name | Type | Required | Description
     * -----|------|----------|------------
     * metric | int32 | Y | Metric ID
     *
     * **Body params:**
     *
     * Name | Type | Required | Description
     * -----|------|----------|------------
     * value | double | Y | Value to plot on the metric graph
     * timestamp | string | Y | Unix timestamp of when the point was measured
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Metric $metric)
    {
        try {
            $metricPoint = dispatch(new CreateMetricPointCommand(
                $metric,
                Binput::get('value'),
                Binput::get('timestamp')
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($metricPoint);
    }

    /**
     * Updates a metric point.
     *
     * **Path params:**
     *
     * Name | Type | Required | Description
     * -----|------|----------|------------
     * metric | int32 | Y | Metric ID
     * metric_point | int32 | Y | Metric point ID
     *
     * **Body params:**
     *
     * Name | Type | Required | Description
     * -----|------|----------|------------
     * value | double | Y | The value to plot on the metric graph
     * timestamp | string | Y | Unix timestamp of when the point was measured
     *
     * @param \CachetHQ\Cachet\Models\Metric      $metric
     * @param \CachetHQ\Cachet\Models\MetircPoint $metricPoint
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Metric $metric, MetricPoint $metricPoint)
    {
        $metricPoint = dispatch(new UpdateMetricPointCommand(
            $metricPoint,
            $metric,
            Binput::get('value'),
            Binput::get('timestamp')
        ));

        return $this->item($metricPoint);
    }

    /**
     * Destroys a metric point.
     *
     * **Path params:**
     *
     * Name | Type | Required | Description
     * -----|------|----------|------------
     * metric | int32 | Y | Metric ID
     * point | int32 | Y | Metric point ID
     *
     * @param \CachetHQ\Cachet\Models\Metric      $metric
     * @param \CachetHQ\Cachet\Models\MetricPoint $metricPoint
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Metric $metric, MetricPoint $metricPoint)
    {
        dispatch(new RemoveMetricPointCommand($metricPoint));

        return $this->noContent();
    }
}
