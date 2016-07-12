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

/**
 * This is the timed action presenter class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class TimedActionPresenter extends BasePresenter implements Arrayable
{
    use TimestampsTrait;

    /**
     * Get the group name.
     *
     * @return string|null
     */
    public function group_name()
    {
        return isset($this->wrappedObject->group->name) ? $this->wrappedObject->group->name : null;
    }

    /**
     * Convert the presenter instance to an array.
     *
     * @return string[]
     */
    public function toArray()
    {
        return array_merge($this->wrappedObject->toArray(), [
            'group_name' => $this->group_name(),
            'created_at' => $this->created_at(),
            'updated_at' => $this->updated_at(),
        ]);
    }
}
