<?php

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\Setting;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use Roumen\Feed\Facades\Feed;

class AtomController extends Controller
{
    /**
     * Generates an Atom feed of all incidents.
     *
     * @return \Illuminate\Http\Response
     */
    public function feedAction()
    {
        $feed = Feed::make();
        $feed->title = Setting::get('app_name');
        $feed->description = 'Status Feed';
        $feed->link = Setting::get('app_domain');

        $feed->setDateFormat('datetime');

        Incident::get()->map(function ($incident) use ($feed) {
            if ($incident->component) {
                $componentName = $incident->component->name;
            } else {
                $componentName = null;
            }

            $feed->add(
                $incident->name,
                Setting::get('app_name'),
                Setting::get('app_domain'),
                $incident->created_at,
                ($componentName === null ? $incident->humanStatus : $componentName." ".$incident->humanStatus),
                $incident->message
            );
        });

        return $feed->render('atom');
    }
}
