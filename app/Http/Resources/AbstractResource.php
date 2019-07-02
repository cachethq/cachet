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

use CachetHQ\Cachet\Foundation\Http\Resources\ResourceCollection;
use CachetHQ\Cachet\Services\Dates\DateFactory;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Config;

class AbstractResource extends JsonResource
{
    /**
     * Create new anonymous resource collection.
     *
     * @param mixed $resource
     *
     * @return ResourceCollection
     */
    public static function collection($resource)
    {
        return new ResourceCollection($resource, static::class);
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function created_at()
    {
        return app(DateFactory::class)->make($this->resource->created_at)->toDateTimeString();
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function updated_at()
    {
        return app(DateFactory::class)->make($this->resource->updated_at)->toDateTimeString();
    }

    /**
     * Present formatted date time.
     *
     * @return string
     */
    public function deleted_at()
    {
        return app(DateFactory::class)->make($this->resource->deleted_at)->toDateTimeString();
    }

    /**
     * Get the incident date format setting, or fallback to a sane default.
     *
     * @return string
     */
    protected function incidentDateFormat()
    {
        return Config::get('setting.incident_date_format', 'l jS F Y H:i:s');
    }
}
