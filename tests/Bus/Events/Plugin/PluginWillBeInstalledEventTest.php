<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Events\Plugin;

use CachetHQ\Cachet\Bus\Events\Plugin\PluginWillBeInstalledEvent;
use CachetHQ\Cachet\Models\Plugin;

/**
 * This is the plugin will be installed event test.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class PluginWillBeInstalledEventTest extends AbstractPluginEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['name' => 'cachethq/cachet-demo-plugin'];
        $object = new PluginWillBeInstalledEvent($params['name']);

        return compact('params', 'object');
    }
}
