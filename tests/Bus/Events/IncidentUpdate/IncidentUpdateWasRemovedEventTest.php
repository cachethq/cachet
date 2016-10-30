<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Events\IncidentUpdate;

use CachetHQ\Cachet\Bus\Events\IncidentUpdate\IncidentUpdateWasRemovedEvent;
use CachetHQ\Cachet\Models\IncidentUpdate;

class IncidentUpdateWasRemovedEventTest extends AbstractIncidentUpdateEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['update' => new IncidentUpdate()];
        $object = new IncidentUpdateWasRemovedEvent($params['update']);

        return compact('params', 'object');
    }
}
