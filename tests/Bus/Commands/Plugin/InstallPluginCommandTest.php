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
use CachetHQ\Cachet\Bus\Commands\Plugin\InstallPluginCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\Plugin\InstallPluginCommandHandler;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the install plugin command test class.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class InstallPluginCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'vendor'  => 'cachethq',
            'package' => 'cachet-demo-plugin',
            'version' => 'dev-master',
        ];
        $object = new InstallPluginCommand(
            $params['vendor'],
            $params['package'],
            $params['version']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return InstallPluginCommandHandler::class;
    }
}
