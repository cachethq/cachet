<?php

namespace CachetHQ\Cachet\Models;

use CachetHQ\Cachet\Transformers\MetricTransformer;
use Dingo\Api\Transformer\TransformableInterface;
use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

/**
 * @property string $name
 * @property string $suffix
 * @property string $description
 * @property int    $display_chart
 */
class Metric extends Model implements TransformableInterface
{
    use ValidatingTrait;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    protected $rules = [
        'name'          => 'required',
        'suffix'        => 'required',
        'display_chart' => 'boolean',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'suffix', 'description', 'display_chart'];

    /**
     * Metrics contain many metric points.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function points()
    {
        return $this->hasMany('CachetHQ\Cachet\Models\MetricPoint', 'metric_id', 'id');
    }

    /**
     * Determines whether a chart should be shown.
     *
     * @return bool
     */
    public function getShouldDisplayAttribute()
    {
        return $this->display_chart === 1;
    }

    /**
     * Get the transformer instance.
     *
     * @return \CachetHQ\Cachet\Transformers\MetricTransformer
     */
    public function getTransformer()
    {
        return new MetricTransformer();
    }
}
