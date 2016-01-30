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
use Illuminate\Support\Facades\Config;
use Jenssegers\Date\Date;
use McCool\LaravelAutoPresenter\BasePresenter;

class SubscriberPresenter extends BasePresenter implements Arrayable
{
    use TimestampsTrait;

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function verified_at()
    {
        return (new Date($this->wrappedObject->verified_at))
            ->setTimezone(Config::get('cachet.timezone'))->toDateTimeString();
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
            'verified_at' => $this->verified_at(),
        ]);
    }
}
