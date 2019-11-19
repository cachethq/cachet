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

/**
 * This is the create metric point command class.
 *
 * @author Joseph Cohen <joe@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
final class CreateMetricPointCommand
{
    /**
     * The metric to add.
     *
     * @var \App\Models\Metric
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
     * @var int
     */
    public $created_at;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'value'      => 'required|numeric',
        'created_at' => 'nullable|int',
    ];

    /**
     * Create a new add metric point command instance.
     *
     * @param \App\Models\Metric $metric
     * @param int                $value
     * @param int                $created_at
     *
     * @return void
     */
    public function __construct(Metric $metric, $value, $created_at)
    {
        $this->metric = $metric;
        $this->value = $value;
        $this->created_at = $created_at;
    }
}
