<?php

namespace CachetHQ\Cachet\Transformers;

use CachetHQ\Cachet\Models\MetricPoint;
use League\Fractal\TransformerAbstract;

class MetricPointTransformer extends TransformerAbstract
{
    /**
     * Transform a metric point model into an array.
     *
     * @param \CachetHQ\Cachet\Models\MetricPoint $metricPoint
     *
     * @return array
     */
    public function transform(MetricPoint $metricPoint)
    {
        return [
            'id'         => (int) $metricPoint->id,
            'metric_id'  => $metricPoint->metric_id,
            'value'      => $metricPoint->value,
            'created_at' => $metricPoint->created_at->timestamp,
            'updated_at' => $metricPoint->updated_at->timestamp,
        ];
    }
}
