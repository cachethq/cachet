<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Integrations;

use GuzzleHttp\Client;
use Illuminate\Contracts\Cache\Repository;
use SimpleXmlElement;

/**
 * This is the feed class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class Feed
{
    /**
     * The default url.
     *
     * @var string
     */
    const URL = 'https://blog.alt-three.com/tag/cachet/rss';

    /**
     * The cache repository instance.
     *
     * @var \Illuminate\Contracts\Cache\Repository
     */
    protected $cache;

    /**
     * The url to use.
     *
     * @var string|null
     */
    protected $url;

    /**
     * Creates a new feed instance.
     *
     * @param \Illuminate\Contracts\Cache\Repository $cache
     * @param string|null                            $url
     *
     * @return void
     */
    public function __construct(Repository $cache, $url = null)
    {
        $this->cache = $cache;
        $this->url = $url ?: static::URL;
    }

    /**
     * Returns the entries.
     *
     * @return array
     */
    public function entries()
    {
        return $this->cache->remember('feeds', 2880, function () {
            $xml = simplexml_load_string((new Client())->get($this->url, [
                'headers' => ['Accept' => 'application/rss+xml', 'User-Agent' => defined('CACHET_VERSION') ? 'cachet/'.constant('CACHET_VERSION') : 'cachet'],
            ])->getBody()->getContents(), null, LIBXML_NOCDATA);

            return json_decode(json_encode($xml));
        });
    }
}
