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
use CachetHQ\Cachet\Models\Traits\SearchableTrait;
use CachetHQ\Cachet\Models\Traits\SortableTrait;
use CachetHQ\Cachet\Presenters\ComponentPresenter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use McCool\LaravelAutoPresenter\HasPresenter;

class Component extends Model implements HasPresenter
{
    use SearchableTrait, SoftDeletes, SortableTrait, ValidatingTrait;

    /**
     * List of attributes that have default values.
     *
     * @var mixed[]
     */
    protected $attributes = [
        'order'       => 0,
        'group_id'    => 0,
        'description' => '',
        'link'        => '',
        'enabled'     => true,
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'order'       => 'int',
        'group_id'    => 'int',
        'description' => 'string',
        'link'        => 'string',
        'deleted_at'  => 'date',
        'enabled'     => 'bool',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'description',
        'status',
        'tags',
        'link',
        'order',
        'group_id',
        'enabled',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'   => 'required|string',
        'status' => 'int|required',
        'link'   => 'url',
    ];

    /**
     * The searchable fields.
     *
     * @var string[]
     */
    protected $searchable = [
        'id',
        'name',
        'status',
        'order',
        'group_id',
        'enabled',
    ];

    /**
     * The sortable fields.
     *
     * @var string[]
     */
    protected $sortable = [
        'id',
        'name',
        'status',
        'order',
        'group_id',
        'enabled',
    ];

    /**
     * Components can belong to a group.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group()
    {
        return $this->belongsTo(ComponentGroup::class, 'group_id', 'id');
    }

    /**
     * Lookup all of the incidents reported on the component.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function incidents()
    {
        return $this->hasMany(Incident::class, 'component_id', 'id');
    }

    /**
     * Components can have many tags.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Finds all components by status.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int                                   $status
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeStatus(Builder $query, $status)
    {
        return $query->where('status', $status);
    }

    /**
     * Finds all components which don't have the given status.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int                                   $status
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNotStatus(Builder $query, $status)
    {
        return $query->where('status', '<>', $status);
    }

    /**
     * Finds all components which are enabled.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeEnabled(Builder $query)
    {
        return $query->where('enabled', true);
    }

    /**
     * Finds all components which are disabled.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDisabled(Builder $query)
    {
        return $query->where('enabled', false);
    }

    /**
     * Returns all of the tags on this component.
     *
     * @return string
     */
    public function getTagsListAttribute()
    {
        $tags = $this->tags->map(function ($tag) {
            return $tag->name;
        });

        return implode(', ', $tags->toArray());
    }

    /**
     * Get the presenter class.
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return ComponentPresenter::class;
    }
}
