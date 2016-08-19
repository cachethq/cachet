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

use CachetHQ\Cachet\Bus\Events\Plugin\PluginWasUninstalledEvent;
use CachetHQ\Cachet\Models\Plugin;

/**
 * This is the plugin was uninstalled event test.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class PluginWasUninstalledEventTest extends AbstractPluginEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['plugin' => new Plugin()];
        $object = new PluginWasUninstalledEvent($params['plugin']);

        return compact('params', 'object');
    }
}
