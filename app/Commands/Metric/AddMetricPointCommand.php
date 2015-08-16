<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Commands\Metric;

use CachetHQ\Cachet\Models\Metric;

class AddMetricPointCommand
{
    /**
     * The metric to add.
     *
     * @var \CachetHQ\Cachet\Models\Metric
     */
    public $metric;

    /**
     * The metric point value.
     *
     * @var int
     */
    public $value;

    /**
     * The metric point created at.
     *
     * @var string
     */
    public $createdAt;

    /**
     * Create a new add metric point command instance.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param int                            $value
     * @param string                         $createdAt
     *
     * @return void
     */
    public function __construct(Metric $metric, $value, $createdAt)
    {
        $this->metric = $metric;
        $this->value = $value;
        $this->createdAt = $createdAt;
    }
}
