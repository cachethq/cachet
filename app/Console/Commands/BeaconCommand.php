<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Console\Commands;

use CachetHQ\Cachet\Bus\Jobs\System\SendBeaconJob;
use Illuminate\Console\Command;

/**
 * This is the beacon command class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class BeaconCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cachet:beacon';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Communicate with the Cachet Beacon server.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        dispatch(new SendBeaconJob());
    }
}
