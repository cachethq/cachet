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

class ComponentGroupPresenter extends AbstractPresenter
{
    use TimestampsTrait;

    /**
     * Returns the lowest component status.
     *
     * @return string
     */
    public function lowest_status()
    {
        return $this->wrappedObject->enabled_components->first()->human_status;
    }

    /**
     * Returns the lowest component status, readable by humans.
     *
     * @return string
     */
    public function lowest_human_status()
    {
        return $this->wrappedObject->enabled_components->first()->human_status;
    }

    /**
     * Returns the lowest component status color.
     *
     * @return string
     */
    public function lowest_status_color()
    {
        return $this->wrappedObject->enabled_components->first()->status_color;
    }

    /**
     * Convert the presenter instance to an array.
     *
     * @return string[]
     */
    public function toArray()
    {
        return array_merge($this->wrappedObject->toArray(), [
            'created_at'          => $this->created_at(),
            'updated_at'          => $this->updated_at(),
            'lowest_human_status' => $this->lowest_human_status(),
        ]);
    }
}
