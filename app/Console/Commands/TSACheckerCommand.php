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

use CachetHQ\Cachet\Actions\ActionExceptionInterface;
use CachetHQ\Cachet\Bus\Commands\TimedAction\CheckTimedActionCommand;
use CachetHQ\Cachet\Models\TimedAction;
use Illuminate\Console\Command;

/**
 * This is the time sensitive action checker command class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class TSACheckerCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cachet:tsa';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks the time sensitive actions.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        foreach (TimedAction::started()->get() as $action) {
            try {
                dispatch(new CheckTimedActionCommand($action));
            } catch (ActionExceptionInterface $e) {
                // just means they're not started or matured
            }
        }
    }
}
