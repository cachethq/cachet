<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joe@cachethq.io>
 * (c) Graham Campbell <graham@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Facades\Setting;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Incident;
use Roumen\Feed\Facades\Feed;

class RssController extends AbstractController
{
    /**
     * Generates an Atom feed of all incidents.
     *
     * @param \CachetHQ\Cachet\Models\ComponentGroup|null $group
     *
     * @return \Illuminate\Http\Response
     */
    public function feedAction(ComponentGroup $group = null)
    {
        $feed = Feed::make();
        $feed->title = Setting::get('app_name');
        $feed->description = trans('cachet.feed');
        $feed->link = Setting::get('app_domain');

        $feed->setDateFormat('datetime');

        if ($group) {
            $group->components->map(function ($component) use ($feed) {
                $component->incidents()->orderBy('created_at', 'desc')->get()->map(function ($incident) use ($feed) {
                    $this->feedAddItem($feed, $incident);
                });
            });
        } else {
            Incident::orderBy('created_at', 'desc')->get()->map(function ($incident) use ($feed) {
                $this->feedAddItem($feed, $incident);
            });
        }

        return $feed->render('rss');
    }

    /**
     * Adds an item to the feed.
     *
     * @param Roumen\Feed\Facades\Feed         $feed
     * @param \CachetHQ\Cachet\Models\Incident $incident
     */
    private function feedAddItem(&$feed, $incident)
    {
        $feed->add(
            $incident->name,
            Setting::get('app_name'),
            Setting::get('app_domain'),
            $incident->created_at->toRssString(),
            $incident->message
        );
    }
}
