<?php

namespace CachetHQ\Cachet\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class StatusPageRoutes
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
        // Prevent access until the app is setup.
        $router->group(['middleware' => 'app.hasSetting', 'setting' => 'app_name'], function ($router) {
            $router->get('/', [
                'as'   => 'status-page',
                'uses' => 'HomeController@showIndex',
            ]);
            $router->get('/atom', 'AtomController@feedAction');
            $router->get('/rss', 'RssController@feedAction');
        });
    }
}
