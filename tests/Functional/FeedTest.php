<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Functional;

use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the feed test class.
 *
 * @author Phecho <phecho@phecho.com>
 */
class FeedTest extends AbstractTestCase
{
    public function testRssResponse()
    {
        $this->get('/rss');
        $this->assertResponseOk();
        $this->seeHeader('Content-Type', 'application/rss+xml; charset=utf-8');
    }

    public function testAtomResponse()
    {
        $this->get('/atom');
        $this->assertResponseOk();
        $this->seeHeader('Content-Type', 'application/atom+xml; charset=utf-8');
    }
}
