<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Integrations\GitHub;

use CachetHQ\Cachet\Bus\Events\System\SystemCheckedForUpdatesEvent;
use CachetHQ\Cachet\Integrations\Contracts\Releases as ReleasesContract;
use GuzzleHttp\Client;
use Illuminate\Contracts\Cache\Repository;
use Illuminate\Support\Facades\Log;

class Releases implements ReleasesContract
{
    /**
     * The default url.
     *
     * @var string
     */
    const URL = 'https://api.github.com/repos/fiveai/cachet/releases/latest';

    /**
     * The failed status indicator.
     *
     * @var int
     */
    const FAILED = 1;

    /**
     * The GuzzleHTTP client instance for making the requests
     *
     * @var \GuzzleHttp\Client
     *
     */
    protected $client;

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
     * Are outbound HTTP requests to the internet allowed by
     * this installation
     *
     * @var bool
     */
    protected $enabled;

    /**
     * Creates a new releases instance.
     *
     * @param \GuzzleHttp\Client                     $client
     * @param \Illuminate\Contracts\Cache\Repository $cache
     * @param string|null                            $token
     * @param string|null                            $url
     *
     * @return void
     */
    public function __construct(Client $client, Repository $cache, bool $enabled = true, $token = null, $url = null)
    {
        $this->client = $client;
        $this->cache = $cache;
        $this->enabled = $enabled;
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
        if (!$this->enabled) {
            return null;
        }

        $release = $this->cache->remember('release.latest', 720, function () {
            $headers = ['Accept' => 'application/vnd.github.v3+json', 'User-Agent' => defined('CACHET_VERSION') ? 'cachet/'.constant('CACHET_VERSION') : 'cachet'];

            if ($this->token) {
                $headers['OAUTH-TOKEN'] = $this->token;
            }

            event(new SystemCheckedForUpdatesEvent());

            try {
                return json_decode($this->client->get($this->url, [
                    'headers' => $headers,
                    'timeout' => 5,
                    'connect_timeout' => 5,
                ])->getBody(), true);

            } catch (\Exception $e) {
                Log::warning('Unable to lookup latest Cachet release. ' . $e->getMessage());
                return self::FAILED;
            }

        });

        return $release === self::FAILED ? null : [
            'tag_name' => $release['tag_name'],
            'prelease' => $release['prerelease'],
            'draft'    => $release['draft'],
        ];
    }
}
