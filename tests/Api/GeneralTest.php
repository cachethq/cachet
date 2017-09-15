<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Api;

/**
 * This is the general test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class GeneralTest extends AbstractApiTestCase
{
    public function testGetPing()
    {
        $this->get('/api/v1/ping');
        $this->seeJsonContains(['data' => 'Pong!']);
        $this->assertResponseOk();
        $this->seeHeader('Content-Type', 'application/json');
    }

    public function testErrorPage()
    {
        $this->get('/api/v1/not-found');

        $this->assertResponseStatus(404);
        $this->seeHeader('Content-Type', 'application/json');
    }

    public function testNotAcceptableContentType()
    {
        $this->get('/api/v1/ping', ['HTTP_Accept' => 'text/html']);

        $this->assertResponseStatus(406);
    }
}
