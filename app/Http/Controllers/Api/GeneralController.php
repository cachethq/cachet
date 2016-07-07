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

use CachetHQ\Cachet\Integrations\Releases;
use CachetHQ\Cachet\Foundation\Queries\SystemStatusQuery;
use CachetHQ\Cachet\Foundation\ViewObjects\SystemStatusViewObject;

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
        $latest = app(Releases::class)->latest();

        return $this->setMetaData([
            'on_latest' => version_compare(CACHET_VERSION, $latest['tag_name']) === 1,
            'latest'    => $latest,
        ])->item(CACHET_VERSION);
    }

    /**
     * Endpoint to show System status
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function status()
    {
        $systemStatusViewArray = (new SystemStatusViewObject(new SystemStatusQuery))->toArray();

        return [
            'system_status'     => $systemStatusViewArray['system_status'],
            'system_message'    => $systemStatusViewArray['system_message']
        ];
    }
}
