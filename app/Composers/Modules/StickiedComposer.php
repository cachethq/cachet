<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Composers\Modules;

use CachetHQ\Cachet\Services\Dates\DateFactory;
use CachetHQ\Cachet\Models\Incident;
use Illuminate\Contracts\View\View;

/**
 * This is the stickied composer.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Connor S. Parks <connor@connorvg.tv>
 * @author Antoine Girard <antoine.girard@sapk.fr>
 */
class StickiedComposer
{
    /**
     * Bind data to the view.
     *
     * @param \Illuminate\Contracts\View\View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $stickiedIncidents = Incident::stickied()->orderBy('occurred_at', 'desc')->get()->groupBy(function (Incident $incident) {
            return app(DateFactory::class)->make($incident->is_scheduled ? $incident->scheduled_at : $incident->occurred_at)->toDateString();
        });

        $view->withStickiedIncidents($stickiedIncidents);
    }
}
