<?php

namespace CachetHQ\Cachet\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class SetupRoutes
{
    /**
     * Define the setup routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'app.isSetup'], function ($router) {
            $router->controller('setup', 'SetupController');
        });
    }
}
