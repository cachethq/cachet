<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Models;

use Illuminate\Database\Eloquent\Model;
use McCool\LaravelAutoPresenter\HasPresenter;
use Watson\Validating\ValidatingTrait;

class MetricPoint extends Model implements HasPresenter
{
    use ValidatingTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['metric_id', 'value', 'created_at'];

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

    /**
     * Get the presenter class.
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return 'CachetHQ\Cachet\Presenters\MetricPointPresenter';
    }
}
