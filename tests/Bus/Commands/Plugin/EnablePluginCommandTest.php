<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Commands\Plugin;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Bus\Commands\Plugin\EnablePluginCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\Plugin\EnablePluginCommandHandler;
use CachetHQ\Cachet\Models\Plugin;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the enable plugin command test class.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class EnablePluginCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = ['plugin' => new Plugin()];
        $object = new EnablePluginCommand($params['plugin']);

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return false;
    }

    protected function getHandlerClass()
    {
        return EnablePluginCommandHandler::class;
    }
}
