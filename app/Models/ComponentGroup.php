<?php

namespace CachetHQ\Cachet\Models;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

/**
 * @property int            $id
 * @property string         $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 */
class ComponentGroup extends Model
{
    use ValidatingTrait;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    protected $rules = [
        'name' => 'required|unique:component_groups',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['name'];

    /**
     * A group can have many components.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function components()
    {
        return $this->hasMany('CachetHQ\Cachet\Models\Component', 'group_id', 'id');
    }
}
