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
 * This is the component group status transition presenter.
 *
 * @author Nicolas Fagotti <nicolasfagotti@gmail.com>
 */
class GroupStatusTransitionPresenter extends BasePresenter implements Arrayable
{
    use TimestampsTrait;

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function created_at_iso()
    {
        return app(DateFactory::class)->make($this->wrappedObject->created_at)->toISO8601String();
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function updated_at_iso()
    {
        return app(DateFactory::class)->make($this->wrappedObject->updated_at)->toISO8601String();
    }

    /**
     * Returns a human readable version of the next status.
     *
     * @return string
     */
    public function human_status()
    {
        return trans('cachet.components.status.'.$this->wrappedObject->status);
    }

    /**
     * Returns a human readable version of the offending components.
     *
     * @return array
     */
    public function human_offending_components()
    {
        $offendingComponents = json_decode($this->wrappedObject->offending_components, true);

        foreach ($offendingComponents as $key => $component) {
            $offendingComponents[$key]['status'] = trans('cachet.components.status.'.$offendingComponents[$key]['status']);
        }

        return $offendingComponents;
    }

    /**
     * Convert the presenter status transition to an array.
     *
     * @return string[]
     */
    public function toArray()
    {
        return array_merge($this->wrappedObject->toArray(), [
            'human_status'         => $this->human_status(),
            'offending_components' => $this->human_offending_components(),
            'utc_created_at'       => $this->created_at_iso(),
            'utc_updated_at'       => $this->updated_at_iso(),
        ]);
    }
}
