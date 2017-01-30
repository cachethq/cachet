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
use CachetHQ\Cachet\Services\Dates\DateFactory;
use Illuminate\Contracts\Support\Arrayable;
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
        return ucfirst(app(DateFactory::class)->make($this->wrappedObject->verified_at)->format($this->incidentDateFormat()));
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
