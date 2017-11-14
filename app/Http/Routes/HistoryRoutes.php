<?php

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
                'as' => 'history',
                'uses' => 'HistoryController@showHistory',
            ]);
        });
    }
}
