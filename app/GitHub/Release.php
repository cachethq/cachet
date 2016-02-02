<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\GitHub;

use GuzzleHttp\Client;
use Illuminate\Contracts\Cache\Repository as CacheRepository;
use Illuminate\Contracts\Config\Repository as ConfigRepository;

class Release
{
    /**
     * The cache repository instance.
     *
     * @var \Illuminate\Contracts\Cache\Repository
     */
    protected $cache;

    /**
     * The config repository instance.
     *
     * @var \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * Creates a new release instance.
     *
     * @param \Illuminate\Contracts\Cache\Repository  $cache
     * @param \Illuminate\Contracts\Config\Repository $config
     *
     * @return void
     */
    public function __construct(CacheRepository $cache, ConfigRepository $config)
    {
        $this->cache = $cache;
        $this->config = $config;
    }

    /**
     * Returns the latest GitHub release.
     *
     * @return string
     */
    public function latest()
    {
        $release = $this->cache->remember('version', 720, function () {
            $headers = ['Accept' => 'application/vnd.github.v3+json'];

            // We can re-use the Emoji token here, if we have it.
            if ($token = $this->config->get('services.github.token')) {
                $headers['OAUTH-TOKEN'] = $token;
            }

            return json_decode((new Client())->get('https://api.github.com/repos/cachethq/cachet/releases/latest', [
                'headers' => $headers,
            ])->getBody(), true);
        });

        return $release['tag_name'];
    }
}
