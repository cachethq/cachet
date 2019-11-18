<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Commands\Metric;

use App\Models\Metric;

final class RemoveMetricCommand
{
    /**
     * The metric to remove.
     *
     * @var \App\Models\Metric
     */
    public $metric;

    /**
     * Create a new remove metric command instance.
     *
     * @param \App\Models\Metric $metric
     *
     * @return void
     */
    public function __construct(Metric $metric)
    {
        $this->metric = $metric;
    }
}
