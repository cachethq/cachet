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

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Presenters\Traits\TimestampsTrait;
use CachetHQ\Cachet\Services\Dates\DateFactory;
use Illuminate\Contracts\Support\Arrayable;
use McCool\LaravelAutoPresenter\BasePresenter;

class ComponentPresenter extends BasePresenter implements Arrayable
{
    use TimestampsTrait;

    /**
     * Icon lookup.
     *
     * @var array
     */
    protected $icons = [
        Component::UNKNOWN        => 'ion-help', // Unknown
        Component::OPERATIONAL    => 'ion-checkmark', // Operational
        Component::ISSUES         => 'ion-asterisk', // Issues
        Component::PARTIAL_OUTAGE => 'ion-alert', // Partial Outage
        Component::MAJOR_OUTAGE   => 'ion-alert-circled', // Major Outage
    ];

    /**
     * Present the status with an icon.
     *
     * @return string
     */
    public function icon()
    {
        $status = $this->wrappedObject->status;

        if (isset($this->icons[$status])) {
            return $this->icons[$status];
        }
    }

    /**
     * Returns the override class name for theming.
     *
     * @return string
     */
    public function status_color()
    {
        switch ($this->wrappedObject->status) {
            case 0: return 'greys';
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
        return ucfirst(app(DateFactory::class)->make($this->wrappedObject->updated_at)->format($this->incidentDateFormat()));
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
