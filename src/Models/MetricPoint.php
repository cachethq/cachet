<?php

namespace CachetHQ\Cachet\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $metric_id
 * @property int $value
 */
class MetricPoint extends Model
{
    /**
     * A metric point belongs to a metric unit.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function metric()
    {
        return $this->belongsTo('CachetHQ\Cachet\Models\Metric', 'id', 'metric_id');
    }
}
