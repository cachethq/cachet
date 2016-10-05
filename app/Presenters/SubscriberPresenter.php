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
use CachetHQ\Cachet\Models\Subscriber;
use CachetHQ\Cachet\Presenters\Traits\TimestampsTrait;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Support\Arrayable;
use McCool\LaravelAutoPresenter\BasePresenter;

class SubscriberPresenter extends BasePresenter implements Arrayable
{
    use TimestampsTrait;

    /**
     * This is the config repository instance.
     *
     * @var \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * Create a new subscriber presenter instance.
     *
     * @param \CachetHQ\Cachet\Models\Subscriber      $resource
     * @param \Illuminate\Contracts\Config\Repository $config
     *
     * @return void
     */
    public function __construct(Subscriber $resource, Repository $config)
    {
        $this->wrappedObject = $resource;
        $this->config = $config;
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function verified_at()
    {
        return ucfirst(app(DateFactory::class)->make($this->wrappedObject->verified_at)->format($this->config->get('setting.incident_date_format', 'l jS F Y H:i:s')));
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
