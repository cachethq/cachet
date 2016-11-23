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
use CachetHQ\Cachet\Models\Traits\SortableTrait;
use CachetHQ\Cachet\Presenters\GroupStatusTransitionPresenter;
use Illuminate\Database\Eloquent\Model;
use McCool\LaravelAutoPresenter\HasPresenter;

/**
 * This is the component group status transition class.
 *
 * @author Nicolas Fagotti <nicolasfagotti@gmail.com>
 */
class GroupStatusTransition extends Model implements HasPresenter
{
    use SortableTrait, ValidatingTrait;

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'component_group_id'   => 'int',
        'status'               => 'int',
        'offending_components' => 'string',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = [
        'component_group_id',
        'status',
        'offending_components',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'component_group_id'   => 'required|int',
        'status'               => 'required|int',
        'offending_components' => 'nullable|string',
    ];

    /**
     * The sortable fields.
     *
     * @var string[]
     */
    protected $sortable = [
        'id',
        'component_group_id',
        'status',
    ];

    /**
     * Get the presenter class.
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return GroupStatusTransitionPresenter::class;
    }
}
