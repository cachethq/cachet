<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Segment;

use GuzzleHttp\ClientInterface;

class HttpRepository implements RepositoryInterface
{
    /**
     * @var \Guzzle\GuzzleClient
     */
    protected $client;

    /**
     * @var string
     */
    protected $url;

    /**
     * Instantiates a new instance of the SegmentApi class.
     *
     * @param \Guzzle\GuzzleClient $client
     * @param string               $url
     */
    public function __construct(ClientInterface $client, $url)
    {
        $this->client = $client;
        $this->url = $url;
    }

    /**
     * Fetches the segment_write_key from the given url.
     *
     * @return string
     */
    public function fetch()
    {
        return $this->client->get($this->url)->json()['segment_write_key'];
    }
}
