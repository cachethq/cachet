<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Jobs\System;

use CachetHQ\Cachet\Bus\Jobs\System\SendBeaconJob;
use CachetHQ\Cachet\Integrations\Contracts\Beacon;
use Exception;

/**
 * This is the send beacon job handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class SendBeaconJobHandler
{
    /**
     * The beacon instance.
     *
     * @var \CachetHQ\Cachet\Integrations\Contracts\Beacon
     */
    protected $beacon;

    /**
     * Create a new send beacon job handler instance.
     *
     * @param \CachetHQ\Cachet\Integrations\Contracts\Beacon $beacon
     *
     * @return void
     */
    public function __construct(Beacon $beacon)
    {
        $this->beacon = $beacon;
    }

    /**
     * Handle the send beacon job.
     *
     * @param \CachetHQ\Cachet\Bus\Jobs\SendBeaconJob $job
     *
     * @return void
     */
    public function handle(SendBeaconJob $job)
    {
        // Don't send anything if the installation explicitly prevents us.
        if (!$this->beacon->enabled()) {
            return;
        }

        try {
            $this->beacon->send();
        } catch (Exception $e) {
            //
        }
    }
}
