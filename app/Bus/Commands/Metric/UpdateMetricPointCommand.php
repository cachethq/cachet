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
use App\Models\MetricPoint;

/**
 * This is the update metric point command.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class UpdateMetricPointCommand
{
    /**
     * The metric point.
     *
     * @var \App\Models\MetricPoint
     */
    public $point;

    /**
     * The metric.
     *
     * @var \App\Models\Metric
     */
    public $metric;

    /**
     * The metric point value.
     *
     * @var float
     */
    public $value;

    /**
     * The metric point created at.
     *
     * @var string
     */
    public $created_at;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'value'      => 'nullable|numeric',
        'created_at' => 'nullable|string',
    ];

    /**
     * Create a new update metric point command instance.
     *
     * @param \App\Models\MetricPoint $point
     * @param \App\Models\Metric      $metric
     * @param float                               $value
     * @param string                              $created_at
     *
     * @return void
     */
    public function __construct(MetricPoint $point, Metric $metric, $value, $created_at)
    {
        $this->point = $point;
        $this->metric = $metric;
        $this->value = $value;
        $this->created_at = $created_at;
    }
}
