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
 * This is the history routes class.
 *
 * @author Nicolà Schnieper <nicola.schnieper@podgroup.com>
 */
class HistoryRoutes
{
    /**
     * Define the history routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group(['middleware' => ['web'], 'as' => 'history.'], function (Registrar $router) {
            $router->get('history', [
                'as'   => 'history',
                'uses' => 'HistoryController@showHistory',
            ]);
        });
    }
}
