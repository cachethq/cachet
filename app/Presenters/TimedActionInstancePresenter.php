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
     * @return string
     */
    public function completed_at()
    {
        return app(DateFactory::class)->make($this->wrappedObject->completed_at, $this->wrappedObject->action->timezone);
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function started_at()
    {
        return app(DateFactory::class)->make($this->wrappedObject->started_at, $this->wrappedObject->action->timezone);
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function ended_at()
    {
        $startAt = $this->wrappedObject->started_at->addSeconds($this->wrappedObject->action->window_length);

        return app(DateFactory::class)->make($startAt, $this->wrappedObject->action->timezone);
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function target_completed_at()
    {
        $endAt = $this->wrappedObject->started_at->addSeconds($this->wrappedObject->action->window_lenth);
        $targettedAt = $endAt->addSeconds($this->wrappedObject->completion_latency);

        return app(DateFactory::class)->make($targettedAt, $this->wrappedObject->action->timezone);
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
            // 'did_complete_on_time' => $this->did_complete_on_time(),
            'created_at'              => $this->created_at(),
            'updated_at'              => $this->updated_at(),
            'ended_at'                => $this->ended_at(),
            'completed_at'            => $this->completed_at(),
            'target_completed_at'     => $this->target_completed_at(),
        ]);
    }
}
