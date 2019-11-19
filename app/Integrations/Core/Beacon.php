<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Integrations\Core;

use App\Bus\Events\Beacon\BeaconFailedToSendEvent;
use App\Bus\Events\Beacon\BeaconWasSentEvent;
use App\Integrations\Contracts\Beacon as BeaconContract;
use App\Models\Action;
use App\Models\Component;
use App\Models\Incident;
use App\Models\Metric;
use App\Models\Schedule;
use App\Models\Tag;
use App\Models\User;
use App\Settings\Repository as Setting;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Support\Str;

/**
 * This is the beacon class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class Beacon implements BeaconContract
{
    /**
     * The beacon url.
     *
     * @var string
     */
    const URL = 'https://cachethq.io/beacon';

    /**
     * The illuminate config instance.
     *
     * @var \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * Create a new beacon instance.
     *
     * @param \Illuminate\Contracts\Config\Repository $config
     *
     * @return void
     */
    public function __construct(Repository $config)
    {
        $this->config = $config;
    }

    /**
     * Has the install enabled Cachet beacon?
     *
     * @return bool
     */
    public function enabled()
    {
        return $this->config->get('cachet.beacon');
    }

    /**
     * Send a beacon to our server.
     *
     * @return void
     */
    public function send()
    {
        // We don't want any accidental sending of beacons if the installation has explicitly said no.
        if (!$this->enabled()) {
            return;
        }

        $setting = app(Setting::class);

        if (!$installId = $setting->get('install_id', null)) {
            $installId = sha1(Str::random(20));

            $setting->set('install_id', $installId);
        }

        $payload = [
            'install_id' => $installId,
            'version'    => CACHET_VERSION,
            'docker'     => $this->config->get('cachet.is_docker'),
            'database'   => $this->config->get('database.default'),
            'data'       => [
                'components' => Component::all()->count(),
                'incidents'  => Incident::all()->count(),
                'metrics'    => Metric::all()->count(),
                'users'      => User::all()->count(),
                'actions'    => Action::all()->count(),
                'tags'       => Tag::all()->count(),
                'schedules'  => Schedule::all()->count(),
            ],
        ];

        try {
            $client = new Client();
            $client->post(self::URL, [
                'headers' => ['Accept' => 'application/json', 'User-Agent' => defined('CACHET_VERSION') ? 'cachet/'.constant('CACHET_VERSION') : 'cachet'],
                'json'    => $payload,
            ]);
        } catch (Exception $e) {
            event(new BeaconFailedToSendEvent());

            return;
        }

        event(new BeaconWasSentEvent());
    }
}
