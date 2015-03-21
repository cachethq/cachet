<?php

namespace CachetHQ\Cachet\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int            $id
 * @property string         $name
 * @property string         $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Setting extends Model
{
    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'value'];

    /**
     * List of attributes that have default values.
     *
     * @var string[]
     */
    protected $attributes = ['value' => ''];
}
