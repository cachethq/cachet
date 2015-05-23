<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class SetupRoutes
{
    /**
     * Define the setup routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     */
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'app.isSetup'], function ($router) {
            $router->controller('setup', 'SetupController');
        });
    }
}
