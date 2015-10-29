<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Commands\User;

use CachetHQ\Cachet\Commands\User\GenerateApiTokenCommand;
use CachetHQ\Cachet\Handlers\Commands\User\GenerateApiTokenCommandHandler;
use CachetHQ\Cachet\Models\User;
use CachetHQ\Tests\Cachet\Commands\AbstractCommandTestCase;

/**
 * This is the generate api token command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class GenerateApiTokenCommandTest extends AbstractCommandTestCase
{
    protected function getObjectAndParams()
    {
        $params = ['user' => new User()];
        $object = new GenerateApiTokenCommand($params['user']);

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return false;
    }

    protected function getHandlerClass()
    {
        return GenerateApiTokenCommandHandler::class;
    }
}
