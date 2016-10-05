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
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Presenters\Traits\TimestampsTrait;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Support\Arrayable;
use McCool\LaravelAutoPresenter\BasePresenter;

class ComponentPresenter extends BasePresenter implements Arrayable
{
    use TimestampsTrait;

    /**
     * This is the config repository instance.
     *
     * @var \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * Create a new component presenter instance.
     *
     * @param \CachetHQ\Cachet\Models\Component       $resource
     * @param \Illuminate\Contracts\Config\Repository $config
     *
     * @return void
     */
    public function __construct(Component $resource, Repository $config)
    {
        $this->wrappedObject = $resource;
        $this->config = $config;
    }

    /**
     * Returns the override class name for theming.
     *
     * @return string
     */
    public function status_color()
    {
        switch ($this->wrappedObject->status) {
            case 1: return 'greens';
            case 2: return 'blues';
            case 3: return 'yellows';
            case 4: return 'reds';
        }
    }

    /**
     * Looks up the human readable version of the status.
     *
     * @return string
     */
    public function human_status()
    {
        return trans('cachet.components.status.'.$this->wrappedObject->status);
    }

    /**
     * Find all tag names for the component names.
     *
     * @return array
     */
    public function tags()
    {
        return $this->wrappedObject->tags->pluck('name', 'slug');
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function updated_at_formatted()
    {
        return ucfirst(app(DateFactory::class)->make($this->wrappedObject->updated_at)->format($this->config->get('setting.incident_date_format', 'l jS F Y H:i:s')));
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
            'status_name' => $this->human_status(),
            'tags'        => $this->tags(),
        ]);
    }
}
