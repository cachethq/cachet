<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

/**
 * This is the feed routes class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class FeedRoutes
{
    /**
     * Define the status page routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group(['middleware' => ['web', 'ready']], function ($router) {
            $router->get('/atom/{component_group?}', [
                'as'   => 'feed.atom',
                'uses' => 'FeedController@atomAction',
            ]);
            $router->get('/rss/{component_group?}', [
                'as'   => 'feed.rss',
                'uses' => 'FeedController@rssAction',
            ]);
        });
    }
}
