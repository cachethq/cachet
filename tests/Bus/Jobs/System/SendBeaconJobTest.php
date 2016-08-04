<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Jobs\System;

use AltThree\TestBench\JobTrait;
use CachetHQ\Cachet\Bus\Handlers\Jobs\System\SendBeaconJobHandler;
use CachetHQ\Cachet\Bus\Jobs\System\SendBeaconJob;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the send beacon job test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class SendBeaconJobTest extends AbstractTestCase
{
    use JobTrait;

    /**
     * @before
     */
    public function setEventExpectations()
    {
        $this->onlyExpectsEvents([]);
    }

    protected function getObjectAndParams()
    {
        $params = [];
        $object = new SendBeaconJob();

        return compact('params', 'object');
    }

    protected function getHandlerClass()
    {
        return SendBeaconJobHandler::class;
    }
}
