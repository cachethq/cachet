<?php

namespace CachetHQ\Cachet\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Metric extends JsonResource
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
