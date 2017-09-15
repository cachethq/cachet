<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Api;

use CachetHQ\Cachet\Integrations\Contracts\Releases;
use CachetHQ\Cachet\Integrations\Contracts\System;

/**
 * This is the general api controller.
 *
 * @author James Brooks <james@bluebaytravel.co.uk>
 */
class GeneralController extends AbstractApiController
{
    /**
     * Ping endpoint allows API consumers to check the version.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ping()
    {
        return $this->item('Pong!');
    }

    /**
     * Endpoint to show the Cachet version.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function version()
    {
        $latest = app()->make(Releases::class)->latest();

        return $this->setMetaData([
            'on_latest' => version_compare(CACHET_VERSION, $latest['tag_name']) === 1,
            'latest'    => $latest,
        ])->item(CACHET_VERSION);
    }

    /**
     * Get the system status message.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function status()
    {
        $system = app()->make(System::class)->getStatus();

        return $this->item([
            'status'  => $system['system_status'],
            'message' => $system['system_message'],
        ]);
    }
}
