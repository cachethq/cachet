<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Presenters;

use CachetHQ\Cachet\Presenters\Traits\TimestampsTrait;
use Illuminate\Contracts\Support\Arrayable;
use McCool\LaravelAutoPresenter\BasePresenter;

class MetricPresenter extends BasePresenter implements Arrayable
{
    use TimestampsTrait;

    /**
     * Determines the metric view filter name.
     *
     * @return string
     */
    public function view_name()
    {
        switch ($this->wrappedObject->default_view) {
            case 0:
                return 'last_hour';
            case 1:
                return 'today';
            case 2:
                return 'week';
            case 3:
                return 'month';
        }
    }

    /**
     * Determines the metric view filter name, used in the API.
     *
     * @return string
     */
    public function default_view_name()
    {
        return trans('cachet.metrics.filter.'.$this->trans_string_name());
    }

    /**
     * Determines the metric translation view filter name.
     *
     * @return string
     */
    public function trans_string_name()
    {
        switch ($this->wrappedObject->default_view) {
            case 0:
                return 'last_hour';
            case 1:
                return 'hourly';
            case 2:
                return 'weekly';
            case 3:
                return 'monthly';
        }
    }

    /**
     * Convert the presenter instance to an array.
     *
     * @return string[]
     */
    public function toArray()
    {
        return array_merge($this->wrappedObject->toArray(), [
            'created_at'        => $this->created_at(),
            'updated_at'        => $this->updated_at(),
            'default_view_name' => $this->default_view_name(),
        ]);
    }
}
