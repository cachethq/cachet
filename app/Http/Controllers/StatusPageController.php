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

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;
use Exception;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;
use Jenssegers\Date\Date;
use McCool\LaravelAutoPresenter\Facades\AutoPresenter;
use PUGX\Poser\Render\SvgRender;
use PUGX\Poser\Poser;

class StatusPageController extends Controller
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

        $daysToShow = Config::get('setting.app_incident_days', 0) - 1;
        if ($daysToShow < 0) {
            $daysToShow = 0;
            $incidentDays = [];
        } else {
            $incidentDays = range(0, $daysToShow);
        }
        $dateTimeZone = Config::get('cachet.timezone');

        $incidentVisibility = Auth::check() ? 0 : 1;

        $allIncidents = Incident::notScheduled()->where('visible', '>=', $incidentVisibility)->whereBetween('created_at', [
            $startDate->copy()->subDays($daysToShow)->format('Y-m-d').' 00:00:00',
            $startDate->format('Y-m-d').' 23:59:59',
        ])->orderBy('scheduled_at', 'desc')->orderBy('created_at', 'desc')->get()->groupBy(function (Incident $incident) use ($dateTimeZone) {
            // If it's scheduled, get the scheduled at date.
            if ($incident->is_scheduled) {
                return (new Date($incident->scheduled_at))
                    ->setTimezone($dateTimeZone)->toDateString();
            }

            return (new Date($incident->created_at))
                ->setTimezone($dateTimeZone)->toDateString();
        });

        // Add in days that have no incidents
        foreach ($incidentDays as $i) {
            $date = (new Date($startDate))->setTimezone($dateTimeZone)->subDays($i);

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
     * Generates a Shield (badge) for the component.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @return \Illuminate\Http\Response
     */
    public function showComponentBadge(Component $component)
    {
        $component = AutoPresenter::decorate($component);
        $poser = new Poser([new SvgRender()]);
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

        return $poser->generate(
            $component->name,
            $component->human_status,
            substr($color, 1),
            Binput::get('style', 'plastic')
        );
    }
}
