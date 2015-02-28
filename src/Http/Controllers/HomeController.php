<?php

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Facades\Setting;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\Metric;
use Carbon\Carbon;
use Exception;
use GrahamCampbell\Binput\Facades\Binput;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Jenssegers\Date\Date;

class HomeController extends Controller
{
    /**
     * Returns the rendered Blade templates.
     *
     * @return \Illuminate\View\View
     */
    public function showIndex()
    {
        segment_track('Status Page', [
            'event' => 'Landed',
        ]);

        $components = Component::orderBy('order')->orderBy('created_at')->get();

        $allIncidents = [];

        $incidentDays = Setting::get('app_incident_days') ?: 7;

        $today = Carbon::now();
        $startDate = Carbon::now();

        $dateFormat = Setting::get('date_format') ?: 'jS F Y';

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

        $scheduledMaintenance = Incident::scheduled()->orderBy('scheduled_at')->get();

        foreach (range(0, $incidentDays) as $i) {
            $date = $startDate->copy()->subDays($i);

            $incidents = Incident::notScheduled()->whereBetween('created_at', [
                $date->format('Y-m-d').' 00:00:00',
                $date->format('Y-m-d').' 23:59:59',
            ])->orderBy('created_at', 'desc')->get();

            $allIncidents[] = [
                'date'      => (new Date($date->toDateString()))->format($dateFormat),
                'incidents' => $incidents,
            ];
        }

        return View::make('index', [
            'components'           => $components,
            'displayMetrics'       => $displayMetrics,
            'metrics'              => $metrics,
            'allIncidents'         => $allIncidents,
            'scheduledMaintenance' => $scheduledMaintenance,
            'pageTitle'            => Setting::get('app_name'),
            'aboutApp'             => Markdown::render(Setting::get('app_about')),
            'canPageForward'       => (bool) $today->gt($startDate),
            'previousDate'         => $startDate->copy()->subWeek()->subDay()->toDateString(),
            'nextDate'             => $startDate->copy()->addWeek()->addDay()->toDateString(),
        ]);
    }
}
