<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Composers;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentTemplate;
use CachetHQ\Cachet\Models\Schedule;
use CachetHQ\Cachet\Models\Subscriber;
use Illuminate\Contracts\View\View;

/**
 * This is the dashboard composer.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class DashboardComposer
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
        $view->withComponentCount(Component::count());
        $view->withIncidentCount(Incident::count());
        $view->withIncidentTemplateCount(IncidentTemplate::count());
        $view->withScheduleCount(Schedule::count());
        $view->withSubscriberCount(Subscriber::isVerified()->count());
        $view->withIsWriteable(is_writable(app()->bootstrapPath().'/cachet'));
    }
}
