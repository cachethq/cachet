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
    public function index()
    {
        $metrics = Metric::query();

        if ($sortBy = request('sort')) {
            $direction = request()->has('order') && request('order') == 'desc';

            $metrics->sort($sortBy, $direction);
        }

        $metrics = $metrics->paginate(request('per_page', 20));

        return $this->paginator($metrics, Request::instance());
    }

    /**
     * Get a single metric.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Metric $metric)
    {
        return $this->item($metric);
    }

    /**
     * Create a new metric.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store()
    {
        try {
            $metric = execute(new CreateMetricCommand(
                request('name'),
                request('suffix'),
                request('description'),
                request('default_value'),
                request('calc_type', 0),
                request('display_chart', true),
                request('places', 2),
                request('default_view', request('view', 1)),
                request('threshold', 5),
                request('order', 0),
                request('visible', 1)
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
    public function update(Metric $metric)
    {
        try {
            $metric = execute(new UpdateMetricCommand(
                $metric,
                request('name'),
                request('suffix'),
                request('description'),
                request('default_value'),
                request('calc_type'),
                request('display_chart'),
                request('places'),
                request('default_view', request('view')),
                request('threshold'),
                request('order'),
                request('visible')
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
    public function destroy(Metric $metric)
    {
        execute(new RemoveMetricCommand($metric));

        return $this->noContent();
    }
}
