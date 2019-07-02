<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Resources;

use CachetHQ\Cachet\Services\Dates\DateFactory;
use Illuminate\Http\Request;

class Component extends AbstractResource
{
    /**
     * Returns the override class name for theming.
     *
     * @return string
     */
    public function status_color()
    {
        switch ($this->resource->status) {
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
        return trans('cachet.components.status.'.$this->resource->status);
    }

    /**
     * Find all tag names for the component names.
     *
     * @return array
     */
    public function tags()
    {
        return $this->resource->tags->pluck('tag.name', 'tag.slug');
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function updated_at_formatted()
    {
        return ucfirst(app(DateFactory::class)->make($this->resource->updated_at)->format($this->incidentDateFormat()));
    }

    /**
     * @param Request $request
     *
     * @return string[]
     */
    public function toArray($request)
    {
        return array_merge($this->resource->toArray(), [
            'created_at'  => $this->created_at(),
            'updated_at'  => $this->updated_at(),
            'status_name' => $this->human_status(),
            'tags'        => $this->tags(),
        ]);
    }
}
