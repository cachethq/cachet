<?php

namespace CachetHQ\Cachet\Models;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

/**
 * @property int            $id
 * @property int            $metric_id
 * @property int            $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class MetricPoint extends Model
{
    use ValidatingTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['metric_id', 'value'];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    protected $rules = [
        'value' => 'numeric|required',
    ];

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
