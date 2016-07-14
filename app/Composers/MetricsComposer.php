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
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\View\View;

class MetricsComposer
{
    /**
     * The illuminate config instance.
     *
     * @var \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * Create a new metrics composer.
     *
     * @param \Illuminate\Contracts\Config\Repository $config
     *
     * @return void
     */
    public function __construct(Repository $config)
    {
        $this->config = $config;
    }

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
        if ($displayMetrics = $this->config->get('setting.display_graphs')) {
            $metrics = Metric::displayable()->orderBy('order')->orderBy('id')->get();
        }

        $view->withDisplayMetrics($displayMetrics)
            ->withMetrics($metrics);
    }
}
