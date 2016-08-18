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

use CachetHQ\Cachet\Models\TimedAction;
use Illuminate\Contracts\View\View;

/**
 * This is the actions composer.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ActionsComposer
{
    /**
     * Metrics view composer.
     *
     * @param \Illuminate\Contracts\View\View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $actions = TimedAction::active()->orderBy('id')->get();

        $view->withActions($actions);
    }
}
