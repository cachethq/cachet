<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Bus\Jobs\System;

use AltThree\TestBench\JobTrait;
use App\Bus\Handlers\Jobs\System\SendBeaconJobHandler;
use App\Bus\Jobs\System\SendBeaconJob;
use Tests\AbstractTestCase;

/**
 * This is the send beacon job test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class SendBeaconJobTest extends AbstractTestCase
{
    use JobTrait;

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
