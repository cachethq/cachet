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

use CachetHQ\Cachet\Models\User;
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
     * Viewable by public.
     */
    const VISIBLE_PUBLIC = 0;

    /**
     * Viewable by logged in users.
     */
    const VISIBLE_LOGGED_IN = 1;

    /**
     * Hidden.
     */
    const VISIBLE_HIDDEN = 2;

    /**
     * The model's attributes.
     *
     * @var string
     */
    protected $attributes = [
        'order'      => 0,
        'collapsed'  => 0,
        'visible'    => 0,
        'created_by' => 0,
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'name'       => 'string',
        'order'      => 'int',
        'collapsed'  => 'int',
        'visible'    => 'int',
        'created_by' => 'int',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'order', 'collapsed', 'visible', 'created_by'];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'       => 'required|string',
        'order'      => 'int',
        'collapsed'  => 'int',
        'visible'    => 'int',
        'created_by' => 'int',
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
     * A group is created by an user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Was the component group created by the target user?
     *
     * @param User $user
     *
     * @return boolean
     */
    public function isCreatedBy(User $user)
    {
        return $this->created_by === $user->getKey();
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
        return $query->where('visible', self::VISIBLE_PUBLIC);
    }

    /**
     * Finds all component groups which are only visible to logged in users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLoggedIn(Builder $query, User $user)
    {
        return $query->where('visible', '<', self::VISIBLE_HIDDEN)
            ->orWhere(function (Builder $query) use ($user) {
                $query->where('visible', self::VISIBLE_HIDDEN)
                    ->where('created_by', $user->getKey())
                ;
            });
        ;
    }
}
