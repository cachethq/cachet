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
use CachetHQ\Cachet\Presenters\ComponentGroupPresenter;
use Illuminate\Database\Eloquent\Model;
use McCool\LaravelAutoPresenter\HasPresenter;

class ComponentGroup extends Model implements HasPresenter
{
    use ValidatingTrait;

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'name'  => 'string',
        'order' => 'int',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'order'];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'  => 'required|string',
        'order' => 'int',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var string[]
     */
    protected $with = ['enabled_components', 'enabled_components_lowest'];

    /**
     * A group can have many components.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function components()
    {
        return $this->hasMany(Component::class, 'group_id', 'id');
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
}
