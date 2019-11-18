<?php

namespace CachetHQ\Cachet\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MetricPoint extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
