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
use CachetHQ\Cachet\Actions\WindowFactory;
use CachetHQ\Cachet\Bus\Commands\TimedAction\CreateTimedActionInstanceCommand;
use CachetHQ\Cachet\Models\TimedAction;
use Illuminate\Console\Command;

/**
 * This is the time sensitive action generator command class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class TSAGeneratorCommand extends Command
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
    protected $description = 'Generate the next time sensitive actions.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        foreach (TimedAction::all() as $action) {
            try {
                $window = app(WindowFactory::class)->next($action);
            } catch (ActionExceptionInterface $e) {
                break;
            }

            if ($action->instances()->window($window)->count() > 0) {
                break;
            }

            dispatch(new CreateTimedActionInstanceCommand($action, $window->start()->toDateTimeString()));
        }
    }
}
