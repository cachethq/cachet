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

use CachetHQ\Cachet\Dates\DateFactory;
use CachetHQ\Cachet\Presenters\Traits\TimestampsTrait;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Facades\Config;
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
        return app(DateFactory::class)->make($this->wrappedObject->verified_at)->toDateTimeString();
    }

    /**
     * Present formatted subscribed date.
     *
     * @return string
     */
    public function subscribed_at()
    {
        return ucfirst(app(DateFactory::class)->make($this->wrappedObject->subscribed_at)->format(Config::get('setting.incident_date_format', 'l jS F Y H:i:s')));
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
