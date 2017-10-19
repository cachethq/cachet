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
use Exception;
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

        $appIncidentDays = (int) Config::get('setting.app_incident_days', 1);
        $incidentDays = array_pad([], $daysToShow, null);

        $allIncidents = Incident::where('visible', '>=', (int) !Auth::check())->whereBetween('occurred_at', [
            $startDate->copy()->subDays($daysToShow)->format('Y-m-d').' 00:00:00',
            $startDate->format('Y-m-d').' 23:59:59',
        ])->orderBy('occurred_at', 'desc')->get()->groupBy(function (Incident $incident) {
            return app(DateFactory::class)->make($incident->occurred_at)->toDateString();
        });

        // Add in days that have no incidents
        if (Config::get('setting.only_disrupted_days') === false) {
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
            ->withDaysToShow($daysToShow)
            ->withAllIncidents($allIncidents)
            ->withCanPageForward((bool) $today->gt($startDate))
            ->withCanPageBackward(Incident::where('occurred_at', '<', $startDate->format('Y-m-d'))->count() > 0)
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
        $type = Binput::get('filter', 'last_hour');
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
