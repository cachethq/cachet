<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Models;

use AltThree\Validator\ValidatingTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * This is the incident component model class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class IncidentComponent extends Model
{
    use ValidatingTrait;

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'incident_id'  => 'int',
        'component_id' => 'int',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = [
        'incident_id',
        'component_id',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'incident_id'  => 'required|int',
        'component_id' => 'required|int',
    ];

    /**
     * Get the incident relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function incident()
    {
        return $this->belongsTo(Incident::class);
    }

    /**
     * Get the component relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function component()
    {
        return $this->belongsTo(Component::class);
    }
}
