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

use CachetHQ\Cachet\Commands\Metric\AddMetricCommand;
use CachetHQ\Cachet\Commands\Metric\RemoveMetricCommand;
use CachetHQ\Cachet\Models\Metric;
use Exception;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class MetricController extends AbstractApiController
{
    use DispatchesJobs;

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
        return $this->collection($metric->points);
    }

    /**
     * Create a new metric.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postMetrics()
    {
        try {
            $metric = $this->dispatch(new AddMetricCommand(
                Binput::get('name'),
                Binput::get('suffix'),
                Binput::get('description'),
                Binput::get('default_value'),
                Binput::get('calc_type', 0),
                Binput::get('display_chart'),
                Binput::get('places')
            ));
        } catch (Exception $e) {
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
            $metric->update(Binput::all());
        } catch (Exception $e) {
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
        $this->dispatch(new RemoveMetricCommand($metric));

        return $this->noContent();
    }
}
