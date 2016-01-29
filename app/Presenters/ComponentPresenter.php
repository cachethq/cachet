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

class ComponentPresenter extends BasePresenter implements Arrayable
{
    use TimestampsTrait;

    /**
     * Returns the override class name for theming.
     *
     * @return string
     */
    public function status_color()
    {
        switch ($this->wrappedObject->status) {
            case 1: return 'greens';
            case 2: return 'blues';
            case 3: return 'yellows';
            case 4: return 'reds';
        }
    }

    /**
     * Looks up the human readable version of the status.
     *
     * @return string
     */
    public function human_status()
    {
        return trans('cachet.components.status.'.$this->wrappedObject->status);
    }

    /**
     * Convert the presenter instance to an array.
     *
     * @return string[]
     */
    public function toArray()
    {
        return array_merge($this->wrappedObject->toArray(), [
            'created_at'  => $this->created_at(),
            'updated_at'  => $this->updated_at(),
            'status_name' => $this->human_status(),
        ]);
    }
}
