<?php

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\Setting;
use Carbon\Carbon;
use GrahamCampbell\Binput\Facades\Binput;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Returns the rendered Blade templates.
     *
     * @return \Illuminate\View\View
     */
    public function showIndex()
    {
        $components = Component::orderBy('order')->orderBy('created_at')->get();

        $allIncidents = [];

        $incidentDays = Setting::get('app_incident_days') ?: 7;

        $today = Carbon::now();
        $startDate = Carbon::now();

        // Check if we have another starting date
        if (Binput::has('start_date')) {
            try {
                // If date provided is valid
                $oldDate = Carbon::createFromFormat('Y-m-d', Binput::get('start_date'));
                // If trying to get a future date fallback to today
                if ($today->gt($oldDate)) {
                    $startDate = $oldDate;
                }
            } catch (Exception $e) {
                // Fallback to today
            }
        }

        foreach (range(0, $incidentDays) as $i) {
            $date = $startDate->copy()->subDays($i);
            $incidents = Incident::whereBetween('created_at', [
                $date->format('Y-m-d').' 00:00:00',
                $date->format('Y-m-d').' 23:59:59',
            ])->orderBy('created_at', 'desc')->get();
            $allIncidents[] = ['date' => $date->format('jS F Y'), 'incidents' => $incidents];
        }

        return View::make('index', [
            'components'     => $components,
            'allIncidents'   => $allIncidents,
            'pageTitle'      => Setting::get('app_name'),
            'aboutApp'       => Markdown::render(Setting::get('app_about')),
            'canPageForward' => (bool) $today->gt($startDate),
            'previousDate'   => $startDate->copy()->subWeek()->subDay()->toDateString(),
            'nextDate'       => $startDate->copy()->addWeek()->addDay()->toDateString(),
        ]);
    }
}
