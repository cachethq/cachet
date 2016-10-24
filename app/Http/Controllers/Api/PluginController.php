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

use CachetHQ\Cachet\Services\Plugins\Contracts\Container;

class PluginController extends AbstractApiController
{
    /**
     * Get all plugins.
     *
     * @param \CachetHQ\Cachet\Services\Plugins\Contracts\Container $plugins
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPlugins(Container $plugins)
    {
        $plugins = $plugins->map(function ($plugin) {
            $authors = array_map(function ($author) {
                return (string) $author;
            }, $plugin->getAuthors());

            return [
                'vendor'  => $plugin->getVendor(),
                'name'    => $plugin->getName(),
                'version' => (string) $plugin->getVersion(),
                'authors' => $authors,
                'enabled' => $plugin->isEnabled(),
            ];
        });

        return $this->collection($plugins);
    }
}
