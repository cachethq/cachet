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

class MetricPointPresenter extends BasePresenter implements Arrayable
{
    use TimestampsTrait;

    /**
     * Show the actual calculated value; as per (value * counter).
     *
     * @return int
     */
    public function calculated_value()
    {
        return $this->wrappedObject->value * $this->wrappedObject->counter;
    }

    /**
     * Convert the presenter instance to an array.
     *
     * @return string[]
     */
    public function toArray()
    {
        return array_merge($this->wrappedObject->toArray(), [
            'created_at'       => $this->created_at(),
            'updated_at'       => $this->updated_at(),
            'calculated_value' => $this->calculated_value(),
        ]);
    }
}
