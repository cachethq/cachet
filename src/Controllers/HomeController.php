<?php

namespace CachetHQ\Cachet\Controllers;

use Carbon\Carbon;
use Component;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Incident;
use Setting;

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

        foreach (range(0, 7) as $i) {
            $date = Carbon::now()->subDays($i);
            $incidents = Incident::whereBetween('created_at', [
                $date->format('Y-m-d').' 00:00:00',
                $date->format('Y-m-d').' 23:59:59',
            ])->orderBy('created_at', 'desc')->get();
            $allIncidents[] = ['date' => $date->format('jS F Y'), 'incidents' => $incidents];
        }

        return View::make('index', [
            'components'   => $components,
            'allIncidents' => $allIncidents,
            'pageTitle'    => Setting::get('app_name'),
            'aboutApp'     => Markdown::render(Setting::get('app_about')),
        ]);
    }
}
