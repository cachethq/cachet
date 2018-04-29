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
 *
 * @resource General
 */
class GeneralController extends AbstractApiController
{
    /**
     * Test that the API is responding to your requests.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *   path="/ping",
     *   summary="Test that the API is responding to your requests.",
     *   description="",
     *   operationId="General@ping",
     *   produces={"application/json"},
     *   tags={"General"},
     *   @SWG\Response(
     *     response=200,
     *     description="Ok.",
     *   )
     * )
     */
    public function ping()
    {
        return $this->item('Pong!');
    }

    /**
     * Get the Cachet version.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *   path="/version",
     *   summary="Get the Cachet version.",
     *   description="",
     *   operationId="General@version",
     *   produces={"application/json"},
     *   tags={"General"},
     *   @SWG\Response(
     *     response=200,
     *     description="Ok.",
     *   )
     * )
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
     *
     * @SWG\Get(
     *   path="/status",
     *   summary="Get the system status message.",
     *   description="",
     *   operationId="General@status",
     *   produces={"application/json"},
     *   tags={"General"},
     *   @SWG\Response(
     *     response=200,
     *     description="Ok.",
     *   )
     * )
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
