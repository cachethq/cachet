<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class StatusPageRoutes
{
    /**
     * Define the status page routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     */
    public function map(Registrar $router)
    {
        // Prevent access until the app is setup.
        $router->group(['middleware' => 'app.hasSetting', 'setting' => 'app_name'], function ($router) {
            $router->get('/', [
                'as'   => 'status-page',
                'uses' => 'HomeController@showIndex',
            ]);
            $router->get('/atom/{component_group?}', 'AtomController@feedAction');
            $router->get('/rss/{component_group?}', 'RssController@feedAction');
        });
    }
}
