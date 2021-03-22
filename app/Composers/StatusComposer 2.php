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

use CachetHQ\Cachet\Integrations\Contracts\System;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;

/**
 * This is the status composer.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class StatusComposer
{
    /**
     * The system instance.
     *
     * @var \CachetHQ\Cachet\Integrations\Contracts\System
     */
    protected $system;

    /**
     * Create a new status composer instance.
     *
     * @param \CachetHQ\Cachet\Integrations\Contracts\System $system
     *
     * @return void
     */
    public function __construct(System $system)
    {
        $this->system = $system;
    }

    /**
     * Bind data to the view.
     *
     * @param \Illuminate\Contracts\View\View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $status = $this->system->getStatus();

        $view->withSystemStatus(Arr::get($status, 'system_status'));
        $view->withSystemMessage(Arr::get($status, 'system_message'));
    }
}
