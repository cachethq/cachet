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

use CachetHQ\Cachet\Bus\Commands\Metric\AddMetricCommand;
use CachetHQ\Cachet\Bus\Commands\Metric\RemoveMetricCommand;
use CachetHQ\Cachet\Bus\Commands\Metric\UpdateMetricCommand;
use CachetHQ\Cachet\Models\Metric;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class MetricController extends AbstractApiController
{
    /**
     * Get all metrics.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getMetrics()
    {
        $metrics = Metric::whereRaw('1=1');

        if ($sortBy = Binput::get('sort')) {
            $direction = Binput::has('order') && Binput::get('order') == 'desc';

            $metrics->sort($sortBy, $direction);
        }

        $metrics = $metrics->paginate(Binput::get('per_page', 20));

        return $this->paginator($metrics, Request::instance());
    }

    /**
     * Get a single metric.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return \Illuminate\Http\JsonResponse
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
        $points = $metric->points()->paginate(Binput::get('per_page', 20));

        return $this->paginator($points, Request::instance());
    }

    /**
     * Create a new metric.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postMetrics()
    {
        try {
            $metric = dispatch(new AddMetricCommand(
                Binput::get('name'),
                Binput::get('suffix'),
                Binput::get('description'),
                Binput::get('default_value'),
                Binput::get('calc_type', 0),
                Binput::get('display_chart'),
                Binput::get('places', 2),
                Binput::get('view', 1)
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($metric);
    }

    /**
     * Update an existing metric.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function putMetric(Metric $metric)
    {
        try {
            $metric = dispatch(new UpdateMetricCommand(
                $metric,
                Binput::get('name'),
                Binput::get('suffix'),
                Binput::get('description'),
                Binput::get('default_value'),
                Binput::get('calc_type', 0),
                Binput::get('display_chart'),
                Binput::get('places', 2),
                Binput::get('view', 1)
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($metric);
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
        dispatch(new RemoveMetricCommand($metric));

        return $this->noContent();
    }
}
