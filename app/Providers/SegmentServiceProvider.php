<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Providers;

use CachetHQ\Cachet\Segment\CacheRepository;
use CachetHQ\Cachet\Segment\HttpRepository;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class SegmentServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton('CachetHQ\Cachet\Segment\RepositoryInterface', function () {
            $url = 'https://gist.githubusercontent.com/jbrooksuk/5de24bc1cf90fb1a3d57/raw/cachet.json';
            $guzzleClient = new Client();
            $client = new HttpRepository($guzzleClient, $url);

            return new CacheRepository($client);
        });
    }
}
