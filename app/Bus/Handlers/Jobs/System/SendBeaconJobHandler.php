<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Handlers\Jobs\System;

use App\Bus\Jobs\System\SendBeaconJob;
use App\Integrations\Contracts\Beacon;
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
     * @var \App\Integrations\Contracts\Beacon
     */
    protected $beacon;

    /**
     * Create a new send beacon job handler instance.
     *
     * @param \App\Integrations\Contracts\Beacon $beacon
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
     * @param \App\Bus\Jobs\System\SendBeaconJob $job
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
