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
use CachetHQ\Cachet\Presenters\ComponentGroupPresenter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use McCool\LaravelAutoPresenter\HasPresenter;
use DebugBar\DebugBar;

/**
 * This is the component group model class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ComponentGroup extends Model implements HasPresenter
{
    use SearchableTrait, SortableTrait, ValidatingTrait;

    /**
     * Viewable only authenticated users.
     *
     * @var int
     */
    const VISIBLE_AUTHENTICATED = 0;

    /**
     * Viewable by public.
     *
     * @var int
     */
    const VISIBLE_GUEST = 1;

    /**
     * The model's attributes.
     *
     * @var string
     */
    protected $attributes = [
        'order'     => 0,
        'collapsed' => 0,
        'visible'   => 0,
        'parent_id'  => 0,
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'name'      => 'string',
        'order'     => 'int',
        'collapsed' => 'int',
        'visible'   => 'int',
        'parent_id'  => 'int',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'order', 'collapsed', 'visible', 'parent_id'];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'      => 'required|string',
        'order'     => 'required|int',
        'collapsed' => 'required|int|between:0,4',
        'visible'   => 'required|bool',
    ];

    /**
     * The searchable fields.
     *
     * @var string[]
     */
    protected $searchable = [
        'id',
        'name',
        'order',
        'collapsed',
        'visible',
        'parent_id',
    ];

    /**
     * The sortable fields.
     *
     * @var string[]
     */
    protected $sortable = [
        'id',
        'name',
        'order',
        'collapsed',
        'visible',
        'parent_id',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var string[]
     */
    protected $with = ['enabled_components', 'enabled_components_lowest', 'subgroups'];

    /**
     * Get the components relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function components()
    {
        return $this->hasMany(Component::class, 'group_id', 'id');
    }

    /**
     * Component groups can be nested in another group.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(ComponentGroup::class, 'parent_id');
    }

    /**
     * A group can have many sub groups. This gets the immediate subgroups.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subgroups()
    {
        return $this->hasMany(ComponentGroup::class, 'parent_id');
    }

    /**
     * Get the incidents relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function incidents()
    {
        return $this->hasManyThrough(Incident::class, Component::class, 'id', 'component_id');
    }

    /**
     * Return all immediate enabled components.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function enabled_components()
    {
        return $this->components()->enabled()->orderBy('order');
    }

    /**
     * Return all of the subgroups with enabled children.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function active_subgroups()
    {
        //TODO: Filter out subgroups without enabled children!
        $subgroups = $this->subgroups()->orderBy('order');
        return $subgroups;
    }

    /**
     * Return the groups immediate enabled components ordered by status.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function enabled_components_lowest()
    {
        return $this->components()->enabled()->orderBy('status', 'desc');
    }

    /**
     * Return all nested subgroups below the group.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function all_subgroups()
    {
        $all_subgroups = $this->subgroups();
        foreach($this->subgroups as $subgroup){
            $all_subgroups = $all_subgroups->union($subgroup->all_subgroups()->toBase());
        }
        return $all_subgroups;
    }

    /**
     * Return all nested subgroups below the group in order by parent_id.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function all_subgroups_ordered() {
        return $this->all_subgroups()->orderBy('parent_id', 'asc');
    }

    /**
     * Returns all enabled components nested under the group.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function all_enabled_components()
    {
        $all_enabled_components = $this->components()->enabled();
        foreach($this->all_subgroups_ordered as $subgroup){
            $all_enabled_components = $all_enabled_components->union($subgroup->components()->enabled()->toBase());
        }
        return $all_enabled_components->orderBy('order');
    }

    /**
     * Returns the lowest component status for all enabled components nested under the group.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function all_enabled_components_lowest()
    {
        $all_enabled_components = $this->components()->enabled();
        foreach($this->all_subgroups_ordered as $subgroup){
            $all_enabled_components = $all_enabled_components->union($subgroup->components()->enabled()->toBase());
        }
        return $all_enabled_components->orderBy('status', 'desc');
    }

    /**
     * Get the presenter class.
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return ComponentGroupPresenter::class;
    }

    /**
     * Finds all component groups which are visible to public.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeVisible(Builder $query)
    {
        return $query->where('visible', '=', self::VISIBLE_GUEST);
    }

    /**
     * Finds all used component groups.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param \Illuminate\Support\Collection        $usedComponentGroups
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUsed(Builder $query, Collection $usedComponentGroups)
    {
        return $query->whereIn('id', $usedComponentGroups)
            ->orderBy('order');
    }
}
