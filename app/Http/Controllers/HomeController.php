<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Facades\Setting;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\Metric;
use Carbon\Carbon;
use Exception;
use GrahamCampbell\Binput\Facades\Binput;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Support\Facades\View;
use Jenssegers\Date\Date;

class HomeController extends AbstractController
{
    /**
     * Returns the rendered Blade templates.
     *
     * @return \Illuminate\View\View
     */
    public function showIndex()
    {
        $today = Carbon::now();
        $startDate = Carbon::now();

        segment_track('Status Page', [
            'event' => 'Landed',
        ]);

        // Check if we have another starting date
        if (Binput::has('start_date')) {
            try {
                // If date provided is valid
                $oldDate = Date::createFromFormat('Y-m-d', Binput::get('start_date'));

                segment_track('Status Page', [
                    'start_date' => $oldDate->format('Y-m-d'),
                ]);

                if (Setting::get('app_tracking')) {
                    Segment::track([
                        'userId'     => Config::get('app.key'),
                        'event'      => 'Home Page',
                        'properties' => [
                            'start_date' => $oldDate,
                        ],
                    ]);
                }

                // If trying to get a future date fallback to today
                if ($today->gt($oldDate)) {
                    $startDate = $oldDate;
                }
            } catch (Exception $e) {
                // Fallback to today
            }
        }

        $metrics = null;

        if ($displayMetrics = Setting::get('display_graphs')) {
            $metrics = Metric::where('display_chart', 1)->get();
        }

        $daysToShow = Setting::get('app_incident_days') ?: 7;
        $incidentDays = range(0, $daysToShow - 1);
        $dateFormat = Setting::get('date_format') ?: 'jS F Y';

        $allIncidents = Incident::notScheduled()->whereBetween('created_at', [
            $startDate->copy()->subDays($daysToShow)->format('Y-m-d').' 00:00:00',
            $startDate->format('Y-m-d').' 23:59:59',
        ])->orderBy('created_at', 'desc')->get()->groupBy(function (Incident $incident) use ($dateFormat) {
            return $incident->created_at->format($dateFormat);
        });

        // Add in days that have no incidents
        foreach ($incidentDays as $i) {
            $date = $startDate->copy()->subDays($i);

            if (!isset($allIncidents[$date->format($dateFormat)])) {
                $allIncidents[$date->format($dateFormat)] = [];
            }
        }

        // Sort the array so it takes into account the added days
        $allIncidents->sortBy(function ($value, $key) {
            return strtotime($key);
        }, SORT_REGULAR, true);

        // Scheduled maintenance code.
        $scheduledMaintenance = Incident::scheduled()->orderBy('scheduled_at')->get();

        // Component & Component Group lists.
        $usedComponentGroups = Component::where('group_id', '>', 0)->groupBy('group_id')->lists('group_id');
        $componentGroups = ComponentGroup::whereIn('id', $usedComponentGroups)->get();
        $ungroupedComponents = Component::where('group_id', 0)->orderBy('order')->orderBy('created_at')->get();

        return View::make('index', [
            'componentGroups'      => $componentGroups,
            'ungroupedComponents'  => $ungroupedComponents,
            'displayMetrics'       => $displayMetrics,
            'metrics'              => $metrics,
            'allIncidents'         => $allIncidents,
            'scheduledMaintenance' => $scheduledMaintenance,
            'pageTitle'            => Setting::get('app_name'),
            'aboutApp'             => Markdown::convertToHtml(Setting::get('app_about')),
            'canPageForward'       => (bool) $today->gt($startDate),
            'previousDate'         => $startDate->copy()->subDays($daysToShow)->toDateString(),
            'nextDate'             => $startDate->copy()->addDays($daysToShow)->toDateString(),
        ]);
    }
}
