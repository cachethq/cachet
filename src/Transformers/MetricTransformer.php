<?php

namespace CachetHQ\Cachet\Transformers;

use CachetHQ\Cachet\Models\Metric;
use League\Fractal\TransformerAbstract;

class MetricTransformer extends TransformerAbstract
{
    /**
     * Transform a metric model into an array.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return array
     */
    public function transform(Metric $metric)
    {
        return [
            'id'          => (int) $metric->id,
            'name'        => $metric->name,
            'description' => $metric->description,
            'suffix'      => $metric->suffix,
            'display'     => $metric->shouldDisplay,
            'created_at'  => $metric->created_at->timestamp,
            'updated_at'  => $metric->updated_at->timestamp,
        ];
    }
}
