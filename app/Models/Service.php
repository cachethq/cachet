<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Models;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

/**
 * @property int            $id
 * @property string         $type
 * @property int            $active
 * @property string         $properties
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 */
class Service extends Model
{
    use ValidatingTrait;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    protected $rules = [
        'type'       => 'alpha_dash|required',
        'active'     => 'required|in:0,1',
        'properties' => '',
    ];

    /**
     * Returns a decoded properties object for the service.
     *
     * @param string $properties
     *
     * @return object
     */
    public function getPropertiesAttribute($properties)
    {
        return json_decode($properties);
    }

    /**
     * Sets the properties attribute which auto encodes to a JSON string.
     *
     * @param mixed $properties
     */
    public function setPropertiesAttribute($properties)
    {
        $this->attributes['properties'] = json_encode($properties);
    }
}
