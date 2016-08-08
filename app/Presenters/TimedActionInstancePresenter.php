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
use McCool\LaravelAutoPresenter\BasePresenter;

/**
 * This is the timed action instance presenter class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class TimedActionInstancePresenter extends BasePresenter implements Arrayable
{
    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function created_at()
    {
        return app(DateFactory::class)->make($this->wrappedObject->created_at, $this->wrappedObject->instance->timezone)->toDateTimeString();
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function updated_at()
    {
        return app(DateFactory::class)->make($this->wrappedObject->updated_at, $this->wrappedObject->instance->timezone)->toDateTimeString();
    }

    /**
     * Did the instance get completed at the expected time, within the completion latency?
     *
     * @return string
     */
    public function did_complete_on_time()
    {
        $action = $this->wrappedObject->action;

        $actionStartDate = app(DateFactory::class)->make($action->created_at)->setTimezone($this->wrappedObject->timezone);
        $nowDate = app(DateFactory::class)->make();

        return $date->toDateTimeString();
    }

    /**
     * Convert the presenter instance to an array.
     *
     * @return string[]
     */
    public function toArray()
    {
        return array_merge($this->wrappedObject->toArray(), [
            'did_complete_on_time' => $this->did_complete_on_time(),
            'created_at'           => $this->created_at(),
            'updated_at'           => $this->updated_at(),
        ]);
    }
}
