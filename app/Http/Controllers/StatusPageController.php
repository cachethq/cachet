<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers;

use AltThree\Badger\Facades\Badger;
use CachetHQ\Cachet\Dates\DateFactory;
use CachetHQ\Cachet\Http\Controllers\Api\AbstractApiController;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\Metric;
use CachetHQ\Cachet\Repositories\Metric\MetricRepository;
use Exception;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use Jenssegers\Date\Date;
use McCool\LaravelAutoPresenter\Facades\AutoPresenter;

class StatusPageController extends AbstractApiController
{
    /**
     * @var \CachetHQ\Cachet\Repositories\Metric\MetricRepository
     */
    protected $metricRepository;

    /**
     * Construct a new status page controller instance.
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
     * Displays the status page.
     *
     * @return \Illuminate\View\View
     */
    public function showIndex()
    {
        $today = Date::now();
        $startDate = Date::now();

        // Check if we have another starting date
        if (Binput::has('start_date')) {
            try {
                // If date provided is valid
                $oldDate = Date::createFromFormat('Y-m-d', Binput::get('start_date'));

                // If trying to get a future date fallback to today
                if ($today->gt($oldDate)) {
                    $startDate = $oldDate;
                }
            } catch (Exception $e) {
                // Fallback to today
            }
        }

        $daysToShow = Config::get('setting.app_incident_days', 0) - 1;
        if ($daysToShow < 0) {
            $daysToShow = 0;
            $incidentDays = [];
        } else {
            $incidentDays = range(0, $daysToShow);
        }

        $incidentVisibility = Auth::check() ? 0 : 1;

        $allIncidents = Incident::notScheduled()->where('visible', '>=', $incidentVisibility)->whereBetween('created_at', [
            $startDate->copy()->subDays($daysToShow)->format('Y-m-d').' 00:00:00',
            $startDate->format('Y-m-d').' 23:59:59',
        ])->orderBy('scheduled_at', 'desc')->orderBy('created_at', 'desc')->get()->groupBy(function (Incident $incident) {
            return app(DateFactory::class)->make($incident->is_scheduled ? $incident->scheduled_at : $incident->created_at)->toDateString();
        });

        // Add in days that have no incidents
        foreach ($incidentDays as $i) {
            $date = app(DateFactory::class)->make($startDate)->subDays($i);

            if (!isset($allIncidents[$date->toDateString()])) {
                $allIncidents[$date->toDateString()] = [];
            }
        }

        // Sort the array so it takes into account the added days
        $allIncidents = $allIncidents->sortBy(function ($value, $key) {
            return strtotime($key);
        }, SORT_REGULAR, true)->all();

        return View::make('index')
            ->withDaysToShow($daysToShow)
            ->withAllIncidents($allIncidents)
            ->withCanPageForward((bool) $today->gt($startDate))
            ->withCanPageBackward(Incident::notScheduled()->where('created_at', '<', $startDate->format('Y-m-d'))->count() > 0)
            ->withPreviousDate($startDate->copy()->subDays($daysToShow)->toDateString())
            ->withNextDate($startDate->copy()->addDays($daysToShow)->toDateString());
    }

    /**
     * Shows an incident in more detail.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\View\View
     */
    public function showIncident(Incident $incident)
    {
        return View::make('incident')
            ->withIncident($incident);
    }

    /**
     * Returns metrics in a readily formatted way.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMetrics(Metric $metric)
    {
        $metricData = [];
        $type = Binput::get('filter', 'last_hour');

        switch ($type) {
            case 'last_hour':
                $metricData = $this->metricRepository->listPointsLastHour($metric);
                break;
            case 'today':
                $metricData = $this->metricRepository->listPointsToday($metric);
                break;
            case 'week':
                $metricData = $this->metricRepository->listPointsForWeek($metric);
                break;
            case 'month':
                $metricData = $this->metricRepository->listPointsForMonth($metric);
                break;
        }

        return $this->item([
            'metric' => $metric->toArray(),
            'items'  => $metricData,
        ]);
    }

    /**
     * Generates a Shield (badge) for the component.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @return \Illuminate\Http\Response
     */
    public function showComponentBadge(Component $component)
    {
        $component = AutoPresenter::decorate($component);
        $color = null;

        switch ($component->status_color) {
            case 'reds':
                $color = Config::get('setting.style_reds', '#ff6f6f');
                break;
            case 'blues':
                $color = Config::get('setting.style_blues', '#3498db');
                break;
            case 'greens':
                $color = Config::get('setting.style_greens', '#7ED321');
                break;
            case 'yellows':
                $color = Config::get('setting.style_yellows', '#F7CA18');
                break;
        }

        $badge = Badger::generate(
            $component->name,
            $component->human_status,
            substr($color, 1),
            Binput::get('style', 'flat-square')
        );

        return Response::make($badge, 200, ['Content-Type' => 'image/svg+xml']);
    }
}
