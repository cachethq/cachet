<?php

namespace CachetHQ\Cachet\Http\Controllers\Admin;

use CachetHQ\Cachet\Models\Metric;
use CachetHQ\Cachet\Models\MetricPoint;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class MetricController extends Controller
{
    /**
     * Shows the metrics view.
     *
     * @return \Illuminate\View\View
     */
    public function showMetrics()
    {
        $metrics = Metric::orderBy('created_at', 'desc')->get();

        return View::make('dashboard.metrics.index')->with([
            'pageTitle' => trans('dashboard.metrics.metrics').' - '.trans('dashboard.dashboard'),
            'metrics'   => $metrics,
        ]);
    }

    /**
     * Shows the add metric view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddMetric()
    {
        return View::make('dashboard.metrics.add')->with([
            'pageTitle'            => trans('dashboard.metrics.add.title').' - '.trans('dashboard.dashboard'),
            'metricMetricPoints'   => MetricPoint::all(),
        ]);
    }

    /**
     * Shows the metric points.
     *
     * @return \Illuminate\View\View
     */
    public function showMetricPoints()
    {
        return View::make('dashboard.metrics.points.index')->with([
            'pageTitle'          => trans('dashboard.metrics.points.title').' - '.trans('dashboard.dashboard'),
            'metricMetricPoints' => MetricPoint::all(),
        ]);
    }

    /**
     * Creates a new metric.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createMetricAction()
    {
        $metricData = Binput::get('metric');
        $metric = Metric::create($metricData);

        if (! $metric->isValid()) {
            segment_track('Dashboard', [
                'event'   => 'Created Metric',
                'success' => false,
            ]);

            return Redirect::back()->withInput(Binput::all())
                ->with('title', sprintf(
                    '<strong>%s</strong> %s',
                    trans('dashboard.notifications.whoops'),
                    trans('dashboard.metrics.add.failure')
                ))
                ->with('errors', $metric->getErrors());
        }

        segment_track('Dashboard', [
            'event'   => 'Created Metric',
            'success' => true,
        ]);

        $successMsg = sprintf(
            '<strong>%s</strong> %s',
            trans('dashboard.notifications.awesome'),
            trans('dashboard.metrics.add.success')
        );

        return Redirect::back()->with('success', $successMsg);
    }

    /**
     * Shows the add metric point view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddMetricPoint()
    {
        return View::make('dashboard.metrics.points.add')->with([
            'pageTitle' => trans('dashboard.metrics.points.add.title').' - '.trans('dashboard.dashboard'),
        ]);
    }

    /**
     * Creates a new metric point.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createMetricPointAction()
    {
        $_point = Binput::get('point');
        $point = MetricPoint::create($_point);

        if (! $point->isValid()) {
            return Redirect::back()->withInput(Binput::all())
                ->with('title', sprintf(
                    '<strong>%s</strong> %s',
                    trans('dashboard.notifications.awesome'),
                    trans('dashboard.metrics.points.add.failure')
                ))
                ->with('errors', $point->getErrors());
        }

        $successMsg = sprintf(
            '<strong>%s</strong> %s',
            trans('dashboard.notifications.awesome'),
            trans('dashboard.metrics.points.add.success')
        );

        return Redirect::back()->with('success', $successMsg);
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
        $metric->delete();

        return Redirect::back();
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
        return View::make('dashboard.metrics.edit')->with([
            'pageTitle'  => trans('dashboard.metrics.edit.title').' - '.trans('dashboard.dashboard'),
            'metric'     => $metric,
        ]);
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
        $_metric = Binput::get('metric');
        $metric->update($_metric);

        if (! $metric->isValid()) {
            segment_track('Dashboard', [
                'event'   => 'Edited Metric',
                'success' => false,
            ]);

            return Redirect::back()->withInput(Binput::all())
                ->with('title', sprintf(
                    '<strong>%s</strong>',
                    trans('dashboard.notifications.awesome')
                ))
                ->with('errors', $metric->getErrors());
        }

        segment_track('Dashboard', [
            'event'   => 'Edited Metric',
            'success' => true,
        ]);

        $successMsg = sprintf(
            '<strong>%s</strong> %s',
            trans('dashboard.notifications.awesome'),
            trans('dashboard.metrics.edit.success')
        );

        return Redirect::to('dashboard/metrics')->with('success', $successMsg);
    }
}
