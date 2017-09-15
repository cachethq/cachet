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

use CachetHQ\Cachet\Models\Schedule;
use Illuminate\Contracts\View\View;

/**
 * This is the scheduled composer.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class ScheduledComposer
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
        $scheduledMaintenance = Schedule::futureSchedules()->orderBy('scheduled_at')->get();

        $view->withScheduledMaintenance($scheduledMaintenance);
    }
}
