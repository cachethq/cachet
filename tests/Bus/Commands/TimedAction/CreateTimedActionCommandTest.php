<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Commands\TimedAction;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Bus\Commands\TimedAction\CreateTimedActionCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\TimedAction\CreateTimedActionCommandHandler;
use CachetHQ\Cachet\Models\TimedActionGroup;
use CachetHQ\Tests\Cachet\AbstractTestCase;
use Carbon\Carbon;

/**
 * This is the create timed action command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class CreateTimedActionCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'name'                  => 'Daily KPIs',
            'description'           => 'Send the daily KPIs to the bosses.',
            'start_at'              => Carbon::now()->toDateTimeString(),
            'active'                => true,
            'visible'               => true,
            'timezone'              => 'Europe/London',
            'window_length'         => 3600,
            'completion_latency'    => 360,
            'timed_action_group_id' => new TimedActionGroup(),
        ];

        $object = new CreateTimedActionCommand(
            $params['name'],
            $params['description'],
            $params['active'],
            $params['visible'],
            $params['start_at'],
            $params['timezone'],
            $params['window_length'],
            $params['completion_latency'],
            $params['timed_action_group_id']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return false;
    }

    protected function getHandlerClass()
    {
        return CreateTimedActionCommandHandler::class;
    }
}
