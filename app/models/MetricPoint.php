<?php

use Illuminate\Database\Eloquent\Model;

class MetricPoint extends Model
{
    /**
     * A metric point belongs to a metric unit.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function metric()
    {
        return $this->belongsTo('Metric', 'id', 'metric_id');
    }
}
