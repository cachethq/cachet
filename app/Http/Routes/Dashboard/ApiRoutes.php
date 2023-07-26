<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Routes\Dashboard;

use Illuminate\Support\Facades\Route;

/**
 * This is the dashboard api routes class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class ApiRoutes
{
    /**
     * Defines if these routes are for the browser.
     *
     * @var bool
     */
    public static $browser = true;

    /**
     * Define the dashboard api routes.
     *
     * @return void
     */
    public function map()
    {
        Route::middleware(['auth'])->prefix('dashboard/api')->namespace('Dashboard')->group(function () {
            Route::get('incidents/templates', 'ApiController@getIncidentTemplate');
            Route::post('components/groups/order', 'ApiController@postUpdateComponentGroupOrder');
            Route::post('components/order', 'ApiController@postUpdateComponentOrder');
            Route::match(['put', 'patch', 'post'], 'components/{component}', 'ApiController@postUpdateComponent');
        });
    }
}
