<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\TimedAction;

use CachetHQ\Cachet\Actions\WindowFactory;
use CachetHQ\Cachet\Bus\Commands\TimedAction\CheckTimedActionCommand;
use CachetHQ\Cachet\Bus\Commands\TimedAction\CreateTimedActionInstanceCommand;

/**
 * This is the check timed action command handler class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class CheckTimedActionCommandHandler
{
    /**
     * The window factory instance.
     *
     * @var \CachetHQ\Cachet\Actions\WindowFactory
     */
    protected $windows;

    /**
     * Create a new check timed action command handler instance.
     *
     * @param \CachetHQ\Cachet\Actions\WindowFactory $windows
     *
     * @return void
     */
    public function __construct(WindowFactory $windows)
    {
        $this->windows = $windows;
    }

    /**
     * Handle the check time action command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\TimedAction\CheckTimedActionCommand $command
     *
     * @return void
     */
    public function handle(CheckTimedActionCommand $command)
    {
        $action = $command->action;

        $previous = $this->windows->previous($action);

        if (!$action->instances()->window($previous)->first()) {
            dispatch(new CreateTimedActionInstanceCommand($action, null, $previous->end(), $previous->end(), true));
        }
    }
}
