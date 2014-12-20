<?php

class MetricPoint extends Eloquent
{
    /**
     * A metric point belongs to a metric unit.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function metric()
    {
        return $this->belongsTo('Metric', 'id', 'metric_id');
    }
}
