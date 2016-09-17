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
    use TimestampsTrait;

    /**
     * Present formatted date time.
     *
     * @return \Carbon\Carbon
     */
    public function started_at()
    {
        return app(DateFactory::class)->make($this->wrappedObject->started_at);
    }

    /**
     * Present formatted date time.
     *
     * @return \Carbon\Carbon
     */
    public function completed_at()
    {
        return app(DateFactory::class)->make($this->wrappedObject->completed_at);
    }

    /**
     * Present formatted date time.
     *
     * @return \Carbon\Carbon
     */
    public function ended_at()
    {
        $end = $this->wrappedObject->started_at->addSeconds($this->wrappedObject->action->schedule_interval);

        return app(DateFactory::class)->make($end);
    }

    /**
     * Present formatted date time.
     *
     * @return \Carbon\Carbon
     */
    public function target_completed_at()
    {
        $target = $this->wrappedObject->started_at->addSeconds($this->wrappedObject->action->schedule_interval + $this->wrappedObject->completion_latency);

        return app(DateFactory::class)->make($target);
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
            'completed_at'        => $this->completed_at(),
            'ended_at'            => $this->ended_at()->toDateTimeString(),
            'target_completed_at' => $this->target_completed_at()->toDateTimeString(),
        ]);
    }
}
