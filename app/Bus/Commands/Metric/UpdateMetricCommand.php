<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\Metric;

use CachetHQ\Cachet\Models\Metric;

final class UpdateMetricCommand
{
    /**
     * The metric.
     *
     * @var \CachetHQ\Cachet\Models\Metric
     */
    public $metric;

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
    public $default_value;

    /**
     * The metric calculation type.
     *
     * @var int
     */
    public $calc_type;

    /**
     * The metric display chart.
     *
     * @var int
     */
    public $display_chart;

    /**
     * The metric decimal places.
     *
     * @var int
     */
    public $places;

    /**
     * The view to show the metric points in.
     *
     * @var int
     */
    public $default_view;

    /**
     * The threshold to buffer the metric points in.
     *
     * @var int
     */
    public $threshold;

    /**
     * The order of which to place the metric in.
     *
     * @var int|null
     */
    public $order;

    /**
     * The visibility of the metric.
     *
     * @var int
     */
    public $visible;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'          => 'nullable|string',
        'suffix'        => 'nullable|string',
        'description'   => 'nullable|string',
        'display_chart' => 'nullable|bool',
        'default_value' => 'nullable|numeric',
        'calc_type'     => 'nullable|int|in:0,1',
        'display_chart' => 'nullable|int',
        'places'        => 'nullable|numeric|between:0,4',
        'default_view'  => 'nullable|numeric|between:0,4',
        'threshold'     => 'nullable|int',
        'order'         => 'nullable|int',
        'visible'       => 'required|int|between:0,2',
    ];

    /**
     * Create a new update metric command instance.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param string                         $name
     * @param string                         $suffix
     * @param string                         $description
     * @param float                          $default_value
     * @param int                            $calc_type
     * @param int                            $display_chart
     * @param int                            $places
     * @param int                            $default_view
     * @param int                            $threshold
     * @param int|null                       $order
     * @param int                            $visible
     *
     * @return void
     */
    public function __construct(Metric $metric, $name, $suffix, $description, $default_value, $calc_type, $display_chart, $places, $default_view, $threshold, $order = null, $visible = null)
    {
        $this->metric = $metric;
        $this->name = $name;
        $this->suffix = $suffix;
        $this->description = $description;
        $this->default_value = $default_value;
        $this->calc_type = $calc_type;
        $this->display_chart = $display_chart;
        $this->places = $places;
        $this->default_view = $default_view;
        $this->threshold = $threshold;
        $this->order = $order;
        $this->visible = $visible;
    }
}
