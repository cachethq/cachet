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

class AddNewMetricCommand
{
    /**
     * The metric name.
     *
     * @var string
     */
    public $name;

    /**
     * The metric suffix.
     *
     * @var string
     */
    public $suffix;

    /**
     * The metric description.
     *
     * @var string
     */
    public $description;

    /**
     * The metric default value.
     *
     * @var float
     */
    public $default;

    /**
     * The metric calc type.
     *
     * @var int
     */
    public $type;

    /**
     * The metric display chart.
     *
     * @var int
     */
    public $chart;

    /**
     * Create a new add team member command instance.
     *
     * @param string $name
     * @param string $suffix
     * @param string $description
     * @param float  $default
     * @param int    $type
     * @param int    $chart
     *
     * @return void
     */
    public function __construct($name, $suffix, $description, $default, $type, $chart)
    {
        $this->name = $name;
        $this->suffix = $suffix;
        $this->description = $description;
        $this->default = $default;
        $this->chart = $chart;
    }
}
