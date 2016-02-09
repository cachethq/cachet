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
use CachetHQ\Cachet\Models\Subscriber;
use Illuminate\Contracts\View\View;

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
        $view->withIncidentCount(Incident::notScheduled()->count());
        $view->withComponentCount(Component::all()->count());
        $view->withSubscriberCount(Subscriber::isVerified()->count());
    }
}
