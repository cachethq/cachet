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
use CachetHQ\Cachet\Bus\Commands\Plugin\UninstallPluginCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\Plugin\UninstallPluginCommandHandler;
use CachetHQ\Cachet\Models\Plugin;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the uninstall plugin command test class.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class UninstallPluginCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = ['plugin' => new Plugin()];
        $object = new UninstallPluginCommand($params['plugin']);

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return false;
    }

    protected function getHandlerClass()
    {
        return UninstallPluginCommandHandler::class;
    }
}
