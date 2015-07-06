<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Segment;

use GuzzleHttp\ClientInterface;

class HttpRepository implements RepositoryInterface
{
    /**
     * The guzzle client instance.
     *
     * @var \GuzzleHttp\ClientInterface
     */
    protected $client;

    /**
     * The url to use.
     *
     * @var string
     */
    protected $url;

    /**
     * Create a new segment http repository instance.
     *
     * @param \GuzzleHttp\ClientInterface $client
     * @param string                      $url
     */
    public function __construct(ClientInterface $client, $url)
    {
        $this->client = $client;
        $this->url = $url;
    }

    /**
     * Returns the segment write key.
     *
     * @return string
     */
    public function fetch()
    {
        $response = $this->client->get($this->url);

        $body = json_decode($response->getBody());

        return $body->segment_write_key;
    }
}
