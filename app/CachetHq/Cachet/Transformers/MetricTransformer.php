<?php

namespace CachetHQ\Cachet\Transformers;

use Metric;
use League\Fractal\TransformerAbstract;

class MetricTransformer extends TransformerAbstract {

    public function transform(Metric $metric) {
        return [
            'id'            => (int) $metric->id,
            'name'          => $metric->name,
            'description'   => $metric->description,
            'suffix'        => $metric->suffix,
            'display'       => $metric->shouldDisplay,
            'created_at'    => $metric->created_at->timestamp,
            'updated_at'    => $metric->updated_at->timestamp,
        ];
    }

}
