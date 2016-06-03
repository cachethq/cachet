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

class Releases
{
    /**
     * The default url.
     *
     * @var string
     */
    const URL = 'https://api.github.com/repos/cachethq/cachet/releases/latest';

    /**
     * The failed status indicator.
     *
     * @var int
     */
    const FAILED = 1;

    /**
     * The cache repository instance.
     *
     * @var \Illuminate\Contracts\Cache\Repository
     */
    protected $cache;

    /**
     * The github authentication token.
     *
     * @var string|null
     */
    protected $token;

    /**
     * The url to use.
     *
     * @var string|null
     */
    protected $url;

    /**
     * Creates a new releases instance.
     *
     * @param \Illuminate\Contracts\Cache\Repository $cache
     * @param string|null                            $token
     * @param string|null                            $url
     *
     * @return void
     */
    public function __construct(Repository $cache, $token = null, $url = null)
    {
        $this->cache = $cache;
        $this->token = $token;
        $this->url = $url ?: static::URL;
    }

    /**
     * Returns the latest release.
     *
     * @return string
     */
    public function latest()
    {
        $release = $this->cache->remember('version', 720, function () {
            $headers = ['Accept' => 'application/vnd.github.v3+json', 'User-Agent' => defined('CACHET_VERSION') ? 'cachet/'.constant('CACHET_VERSION') : 'cachet'];

            if ($this->token) {
                $headers['OAUTH-TOKEN'] = $this->token;
            }

            return json_decode((new Client())->get($this->url, [
                'headers' => $headers,
            ])->getBody(), true);
        });

        return $release['tag_name'];
    }
}
