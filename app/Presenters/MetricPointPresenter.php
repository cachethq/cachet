<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Presenters;

use CachetHQ\Cachet\Facades\Setting;
use Illuminate\Contracts\Support\Arrayable;
use Jenssegers\Date\Date;
use McCool\LaravelAutoPresenter\BasePresenter;

class MetricPointPresenter extends BasePresenter implements Arrayable
{
    /**
     * Time zone setting.
     *
     * @var string
     */
    protected $tz;

    /**
     * Create a incident presenter instance.
     *
     * @param object $resource
     */
    public function __construct($resource)
    {
        parent::__construct($resource);

        $this->tz = Setting::get('app_timezone');
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function created_at()
    {
        return (new Date($this->wrappedObject->created_at))
            ->setTimezone($this->tz)->toDateTimeString();
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function updated_at()
    {
        return (new Date($this->wrappedObject->updated_at))
            ->setTimezone($this->tz)->toDateTimeString();
    }

    /**
     * Convert the presenter instance to an array.
     *
     * @return array
     */
    public function toArray()
    {
        return array_merge($this->wrappedObject->toArray(), [
            'created_at' => $this->created_at(),
            'updated_at' => $this->updated_at(),
        ]);
    }
}
