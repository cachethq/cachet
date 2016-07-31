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
use Illuminate\Database\Eloquent\Builder;
use McCool\LaravelAutoPresenter\HasPresenter;
use CachetHQ\Cachet\Models\Traits\SortableTrait;
use CachetHQ\Cachet\Models\Traits\SearchableTrait;
use CachetHQ\Cachet\Presenters\ComponentGroupPresenter;

class ComponentGroup extends Model implements HasPresenter
{
    use SearchableTrait, SortableTrait, ValidatingTrait;

    /**
     * The model's attributes.
     *
     * @var string
     */
    protected $attributes = [
        'order'     => 0,
        'collapsed' => 0,
        'visible'   => 0,
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
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'order', 'collapsed', 'visible'];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'      => 'required|string',
        'order'     => 'int',
        'collapsed' => 'int',
        'visible'   => 'int',
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
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var string[]
     */
    protected $with = ['enabled_components', 'enabled_components_lowest'];

    /**
     * Get the components relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function components()
    {
        return $this->hasMany(Component::class, 'group_id', 'id')->orderBy('order');
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
     * Return all of the enabled components.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function enabled_components()
    {
        return $this->components()->enabled();
    }

    /**
     * Return all of the enabled components ordered by status.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function enabled_components_lowest()
    {
        return $this->components()->enabled()->orderBy('status', 'desc');
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
    public function scopeGuest(Builder $query)
    {
        return $query->where('visible', 0);
    }

    /**
     * Finds all component groups which are only visible to logged in users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLoggedIn(Builder $query)
    {
        return $query->where('visible', '>=', 1);
    }
}
