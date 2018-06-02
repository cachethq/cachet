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

use CachetHQ\Cachet\Bus\Commands\Metric\CreateMetricCommand;
use CachetHQ\Cachet\Bus\Commands\Metric\RemoveMetricCommand;
use CachetHQ\Cachet\Bus\Commands\Metric\UpdateMetricCommand;
use CachetHQ\Cachet\Models\Metric;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * The Metric API controller.
 *
 * @resource Metric
 */
class MetricController extends AbstractApiController
{
    /**
     * Get all metrics.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     *
     * @SWG\Get(
     *   path="/metrics",
     *   summary="List all metrics.",
     *   operationId="Metric@index",
     *   tags={"Metrics"},
     *   produces={"application/json"}, 
     *   @SWG\Parameter(
     *     description="Attribute name on which apply 'order'.",
     *     in="query",
     *     name="sort",
     *     required=false,
     *     type="integer",
     *     format="int64"
     *   ),
     *   @SWG\Parameter(
     *     description="Order in which order the results, ASC or DESC.",
     *     in="query",
     *     name="order",
     *     required=false,
     *     type="integer",
     *     format="int64"
     *   ),
     *   @SWG\Response(
     *     response=200,
     *     description="A list with all metrics."
     *   )
     * )
     */
    public function index()
    {
        $metrics = Metric::query();

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
     *
     * @SWG\Get(
     *   path="/metrics/{metric}",
     *   summary="Get a single metric.",
     *   tags={"Metrics"},
     *   operationId="Metric@show",
     *   @SWG\Parameter(
     *     description="ID of metric to return.",
     *     in="path",
     *     name="metric",
     *     required=true,
     *     type="integer",
     *     format="int64"
     *  ),
     *  @SWG\Response(
     *     response=200,
     *     description="A single metric."
     *   )
     * )
     */
    public function show(Metric $metric)
    {
        return $this->item($metric);
    }

    /**
     * Create a new metric.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Post(
     *   path="/metrics",
     *   tags={"Metrics"},
     *   operationId="Metric@store",
     *   summary="Add a new metric.",
     *   description="",
     *   consumes={"multipart/form-data"},
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     name="name",
     *     in="formData",
     *     type="string",
     *     description="Name of the metric.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="suffix",
     *     in="formData",
     *     type="string",
     *     description="Measurments in. Usually '%', 'ms' for example.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="description",
     *     in="formData",
     *     type="string",
     *     description="Description of the metric.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="default_value",
     *     in="formData",
     *     type="integer",
     *     description="The default value when a point is added.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="display_chart",
     *     in="formData",
     *     type="integer",
     *     description="Whether to display the chart on the status page.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="calc_type",
     *     in="formData",
     *     type="integer",
     *     description="The calc type. 0 for sum, 1 for average. Default 0.",
     *     required=false
     *   ),
     *   @SWG\Parameter(
     *     name="default_view",
     *     in="formData",
     *     type="integer",
     *     description="The default view (24h, week, ...). Default 24h.",
     *     required=false
     *   ),
     *   @SWG\Parameter(
     *     name="threshold",
     *     in="formData",
     *     type="integer",
     *     description="The threshold. Default 5.",
     *     required=false
     *   ),
     *   @SWG\Parameter(
     *     name="order",
     *     in="formData",
     *     type="integer",
     *     description="The order.",
     *     required=false
     *   ),
     *   @SWG\Parameter(
     *     name="visible",
     *     in="formData",
     *     type="integer",
     *     description="Whether the graph should be visible. Default visible.",
     *     required=false
     *   ),
     *   @SWG\Response(
     *     response=200,
     *     description="The metric."
     *   ),
     *   @SWG\Response(
     *     response=400,
     *     description="Invalid metric."
     *   )
     * )
     */
    public function store()
    {
        try {
            $metric = dispatch(new CreateMetricCommand(
                Binput::get('name'),
                Binput::get('suffix'),
                Binput::get('description'),
                Binput::get('default_value'),
                Binput::get('calc_type', 0),
                Binput::get('display_chart', true),
                Binput::get('places', 2),
                Binput::get('default_view', Binput::get('view', 1)),
                Binput::get('threshold', 5),
                Binput::get('order', 0),
                Binput::get('visible', 1)
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
     *
     * @SWG\Put(
     *   path="/metrics/{metric}",
     *   tags={"Metrics"},
     *   operationId="Metric@update",
     *   summary="update a metric.",
     *   description="",
     *   consumes={"multipart/form-data"},
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     name="name",
     *     in="formData",
     *     type="string",
     *     description="Name of the metric.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="suffix",
     *     in="formData",
     *     type="string",
     *     description="Measurments in. Usually '%', 'ms' for example.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="description",
     *     in="formData",
     *     type="string",
     *     description="Description of the metric.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="default_value",
     *     in="formData",
     *     type="integer",
     *     description="The default value when a point is added.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="display_chart",
     *     in="formData",
     *     type="integer",
     *     description="Whether to display the chart on the status page.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="calc_type",
     *     in="formData",
     *     type="integer",
     *     description="The calc type. 0 for sum, 1 for average.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="default_view",
     *     in="formData",
     *     type="integer",
     *     description="The default view (24h, week, ...). Default 24h.",
     *     required=false
     *   ),
     *   @SWG\Parameter(
     *     name="threshold",
     *     in="formData",
     *     type="integer",
     *     description="The threshold.",
     *     required=true
     *   ),
     *   @SWG\Parameter(
     *     name="order",
     *     in="formData",
     *     type="integer",
     *     description="The order.",
     *     required=false
     *   ),
     *   @SWG\Parameter(
     *     name="visible",
     *     in="formData",
     *     type="integer",
     *     description="Whether the graph should be visible.",
     *     required=true
     *   ),
     *   @SWG\Response(
     *     response=200,
     *     description="The metric."
     *   ),
     *   @SWG\Response(
     *     response=400,
     *     description="Invalid metric."
     *   )
     * )
     */
    public function update(Metric $metric)
    {
        try {
            $metric = dispatch(new UpdateMetricCommand(
                $metric,
                Binput::get('name'),
                Binput::get('suffix'),
                Binput::get('description'),
                Binput::get('default_value'),
                Binput::get('calc_type'),
                Binput::get('display_chart'),
                Binput::get('places'),
                Binput::get('default_view', Binput::get('view')),
                Binput::get('threshold'),
                Binput::get('order'),
                Binput::get('visible')
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
     *
     * @SWG\Delete(
     *   path="/metrics/{metric}",
     *   summary="Deletes a metric.",
     *   description="",
     *   operationId="Metric@destroy",
     *   tags={"Metrics"},
     *   @SWG\Parameter(
     *     description="Metric ID to delete.",
     *     in="path",
     *     name="metric",
     *     required=true,
     *     type="integer",
     *     format="int64"
     *   ),
     *   @SWG\Response(
     *     response=204,
     *     description="Ok."
     *   ),
     * )
     */
    public function destroy(Metric $metric)
    {
        dispatch(new RemoveMetricCommand($metric));

        return $this->noContent();
    }
}
