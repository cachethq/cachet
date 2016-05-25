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

class Release
{
    /**
     * The cache repository instance.
     *
     * @var \Illuminate\Contracts\Cache\Repository
     */
    protected $cache;

    /**
     * The github authentication token.
     *
     * @var string
     */
    protected $token;

    /**
     * Creates a new release instance.
     *
     * @param \Illuminate\Contracts\Cache\Repository $cache
     * @param string                                 $token
     *
     * @return void
     */
    public function __construct(CacheRepository $cache, $token)
    {
        $this->cache = $cache;
        $this->token = $token;
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
            if ($this->token) {
                $headers['OAUTH-TOKEN'] = $this->token;
            }

            return json_decode((new Client())->get('https://api.github.com/repos/cachethq/cachet/releases/latest', [
                'headers' => $headers,
            ])->getBody(), true);
        });

        return $release['tag_name'];
    }
}
