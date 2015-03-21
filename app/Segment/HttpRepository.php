<?php

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
