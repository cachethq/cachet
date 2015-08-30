<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Composers;

use CachetHQ\Cachet\Facades\Setting;
use CachetHQ\Cachet\Models\Metric;
use CachetHQ\Cachet\Repositories\Metric\MetricRepository;
use Illuminate\Contracts\View\View;

class MetricsComposer
{
    /**
     * @var \CachetHQ\Cachet\Repositories\Metric\MetricRepository
     */
    protected $metricRepository;

    /**
     * Construct a new home controller instance.
     *
     * @param \CachetHQ\Cachet\Repositories\Metric\MetricRepository $metricRepository
     *
     * @return void
     */
    public function __construct(MetricRepository $metricRepository)
    {
        $this->metricRepository = $metricRepository;
    }

    /**
     * Metrics view composer.
     *
     * @param \Illuminate\Contracts\View\View $view
     */
    public function compose(View $view)
    {
        $metrics = null;
        $metricData = [];
        if ($displayMetrics = Setting::get('display_graphs')) {
            $metrics = Metric::where('display_chart', 1)->get();

            $metrics->map(function ($metric) use (&$metricData) {
                $metricData[$metric->id] = [
                    'today' => $this->metricRepository->listPointsToday($metric),
                    'week'  => $this->metricRepository->listPointsForWeek($metric),
                    'month' => $this->metricRepository->listPointsForMonth($metric),
                ];
            });
        }

        $view->withDisplayMetrics($displayMetrics)
            ->withMetrics($metrics)
            ->withMetricData($metricData);
    }
}
