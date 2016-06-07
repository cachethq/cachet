<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Composers;

use CachetHQ\Cachet\Models\Metric;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Config;

class MetricsComposer
{
    /**
     * Metrics view composer.
     *
     * @param \Illuminate\Contracts\View\View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $metrics = null;
        if ($displayMetrics = Config::get('setting.display_graphs')) {
            $metrics = Metric::displayable()->orderBy('order')->orderBy('id')->get();
        }

        $view->withDisplayMetrics($displayMetrics)
            ->withMetrics($metrics);
    }
}
