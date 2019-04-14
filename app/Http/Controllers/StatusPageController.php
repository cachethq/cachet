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
use CachetHQ\Cachet\Http\Controllers\Api\AbstractApiController;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\Metric;
use CachetHQ\Cachet\Models\Schedule;
use CachetHQ\Cachet\Repositories\Metric\MetricRepository;
use CachetHQ\Cachet\Services\Dates\DateFactory;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use Jenssegers\Date\Date;
use McCool\LaravelAutoPresenter\Facades\AutoPresenter;

/**
 * This is the status page controller class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 * @author Joseph Cohen <joe@alt-three.com>
 */
class StatusPageController extends AbstractApiController
{
    /**
     * Displays the status page.
     *
     * @return \Illuminate\View\View
     */
    public function showIndex()
    {
        $onlyDisruptedDays = Config::get('setting.only_disrupted_days');
        $appIncidentDays = (int) Config::get('setting.app_incident_days', 1);

        $startDate = Date::createFromFormat('Y-m-d', Binput::get('start_date', Date::now()->toDateString()));
        $endDate = $startDate->copy()->subDays($appIncidentDays);

        $canPageForward = false;
        $canPageBackward = false;
        $previousDate = null;
        $nextDate = null;

        if ($onlyDisruptedDays) {
            // In this case, start_date GET parameter means the page
            $page = (int) Binput::get('start_date', 0);

            $allIncidentDays = Incident::where('visible', '>=', (int) !Auth::check())
                                       ->select('occurred_at')
                                       ->whereBetween('occurred_at', [
                                           $endDate->format('Y-m-d').' 00:00:00',
                                           $startDate->format('Y-m-d').' 23:59:59',
                                       ])
                                       ->distinct()
                                       ->orderBy('occurred_at', 'desc')
                                       ->get()
                                       ->map(function (Incident $incident) {
                                           return app(DateFactory::class)->make($incident->occurred_at)->toDateString();
                                       })->unique()
                                      ->values();

            $numIncidentDays = count($allIncidentDays);
            $numPages = round($numIncidentDays / max($appIncidentDays, 1));

            $selectedDays = $allIncidentDays->slice($page * $appIncidentDays, $appIncidentDays)->all();

            if (count($selectedDays) > 0) {
                $startDate = Date::createFromFormat('Y-m-d', array_values($selectedDays)[0]);
                $endDate = Date::createFromFormat('Y-m-d', array_values(array_slice($selectedDays, -1))[0]);
            }

            $canPageForward = $page > 0;
            $canPageBackward = ($page + 1) < $numPages;
            $previousDate = $page + 1;
            $nextDate = $page - 1;
        } else {
            $date = Date::now();

            $canPageForward = (bool) $startDate->lt($date->sub('1 day'));
            $canPageBackward = Incident::where('occurred_at', '<', $date->format('Y-m-d'))->count() > 0;
            $previousDate = $startDate->copy()->subDays($appIncidentDays)->toDateString();
            $nextDate = $startDate->copy()->addDays($appIncidentDays)->toDateString();
        }

        $allIncidents = Incident::with('component')->with('updates.incident')
            ->where('visible', '>=', (int) !Auth::check())->whereBetween('occurred_at', [
            $endDate->format('Y-m-d').' 00:00:00',
            $startDate->format('Y-m-d').' 23:59:59',
        ])->orderBy('occurred_at', 'desc')->get()->groupBy(function (Incident $incident) {
            return app(DateFactory::class)->make($incident->occurred_at)->toDateString();
        });

        if (!$onlyDisruptedDays) {
            $incidentDays = array_pad([], $appIncidentDays, null);

            // Add in days that have no incidents
            foreach ($incidentDays as $i => $day) {
                $date = app(DateFactory::class)->make($startDate)->subDays($i);

                if (!isset($allIncidents[$date->toDateString()])) {
                    $allIncidents[$date->toDateString()] = [];
                }
            }
        }

        // Sort the array so it takes into account the added days
        $allIncidents = $allIncidents->sortBy(function ($value, $key) {
            return strtotime($key);
        }, SORT_REGULAR, true);

        return View::make('index')
            ->withDaysToShow($appIncidentDays)
            ->withAllIncidents($allIncidents)
            ->withCanPageForward($canPageForward)
            ->withCanPageBackward($canPageBackward)
            ->withPreviousDate($previousDate)
            ->withNextDate($nextDate);
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
        return View::make('single-incident')->withIncident($incident);
    }

    /**
     * Show a single schedule.
     *
     * @param \CachetHQ\Cachet\Models\Schedule $schedule
     *
     * @return \Illuminate\View\View
     */
    public function showSchedule(Schedule $schedule)
    {
        return View::make('single-schedule')->withSchedule($schedule);
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
        $type = Binput::get('filter', AutoPresenter::decorate($metric)->view_name);
        $metrics = app(MetricRepository::class);

        switch ($type) {
            case 'last_hour': $metricData = $metrics->listPointsLastHour($metric); break;
            case 'today': $metricData = $metrics->listPointsToday($metric); break;
            case 'week': $metricData = $metrics->listPointsForWeek($metric); break;
            case 'month': $metricData = $metrics->listPointsForMonth($metric); break;
            default: $metricData = [];
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

        switch ($component->status_color) {
            case 'reds': $color = Config::get('setting.style_reds', '#FF6F6F'); break;
            case 'blues': $color = Config::get('setting.style_blues', '#3498DB'); break;
            case 'greens': $color = Config::get('setting.style_greens', '#7ED321'); break;
            case 'yellows': $color = Config::get('setting.style_yellows', '#F7CA18'); break;
            default: $color = null;
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
