<?php

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Facades\Setting;
use CachetHQ\Cachet\Models\Incident;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use Thujohn\Rss\RssFacade;

class RssController extends Controller
{
    /**
     * Generates an RSS feed of all incidents.
     *
     * @return \Illuminate\Http\Response
     */
    public function feedAction()
    {
        $feed = RssFacade::feed('2.0', 'UTF-8');
        $feed->channel([
            'title'       => Setting::get('app_name'),
            'description' => trans('cachet.feed'),
            'link'        => Setting::get('app_domain'),
        ]);

        Incident::get()->map(function ($incident) use ($feed) {
            if ($incident->component) {
                $componentName = $incident->component->name;
            } else {
                $componentName = null;
            }

            $feed->item([
                'title'      => $incident->name,
                'message'    => $incident->message,
                'component'  => $componentName,
                'status'     => $incident->humanStatus,
                'created_at' => $incident->created_at,
                'updated_at' => $incident->updated_at,
            ]);
        });

        return Response::make($feed, 200, ['Content-Type' => 'text/xml']);
    }
}
