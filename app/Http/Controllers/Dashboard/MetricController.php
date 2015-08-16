<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Dashboard;

use AltThree\Validator\ValidationException;
use CachetHQ\Cachet\Commands\Metric\AddMetricCommand;
use CachetHQ\Cachet\Commands\Metric\RemoveMetricCommand;
use CachetHQ\Cachet\Models\Metric;
use CachetHQ\Cachet\Models\MetricPoint;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class MetricController extends Controller
{
    use DispatchesJobs;

    /**
     * Shows the metrics view.
     *
     * @return \Illuminate\View\View
     */
    public function showMetrics()
    {
        $metrics = Metric::orderBy('created_at', 'desc')->get();

        return View::make('dashboard.metrics.index')
            ->withPageTitle(trans('dashboard.metrics.metrics').' - '.trans('dashboard.dashboard'))
            ->withMetrics($metrics);
    }

    /**
     * Shows the add metric view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddMetric()
    {
        return View::make('dashboard.metrics.add')
            ->withPageTitle(trans('dashboard.metrics.add.title').' - '.trans('dashboard.dashboard'));
    }

    /**
     * Shows the metric points.
     *
     * @return \Illuminate\View\View
     */
    public function showMetricPoints()
    {
        return View::make('dashboard.metrics.points.index')
            ->withPageTitle(trans('dashboard.metrics.points.title').' - '.trans('dashboard.dashboard'))
            ->withMetrics(MetricPoint::all());
    }

    /**
     * Creates a new metric.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createMetricAction()
    {
        try {
            $this->dispatchFromArray(AddMetricCommand::class, Binput::get('metric'));
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.metrics.add')
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.metrics.add.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.metrics.add')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.metrics.add.success')));
    }

    /**
     * Shows the add metric point view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddMetricPoint()
    {
        return View::make('dashboard.metrics.points.add')
            ->withPageTitle(trans('dashboard.metrics.points.add.title').' - '.trans('dashboard.dashboard'));
    }

    /**
     * Deletes a given metric.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteMetricAction(Metric $metric)
    {
        $this->dispatch(new RemoveMetricCommand($metric));

        return Redirect::route('dashboard.metrics.index');
    }

    /**
     * Shows the edit metric view.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return \Illuminate\View\View
     */
    public function showEditMetricAction(Metric $metric)
    {
        return View::make('dashboard.metrics.edit')
            ->withPageTitle(trans('dashboard.metrics.edit.title').' - '.trans('dashboard.dashboard'))
            ->withMetric($metric);
    }

    /**
     * Edit an metric.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editMetricAction(Metric $metric)
    {
        try {
            $metric->update(Binput::get('metric', null, false));
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.metrics.edit', ['id' => $metric->id])
                ->withInput(Binput::all())
                ->withTitle(sprintf('<strong>%s</strong>', trans('dashboard.notifications.whoops')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.metrics.edit', ['id' => $metric->id])
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.metrics.edit.success')));
    }
}
