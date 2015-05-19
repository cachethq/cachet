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
use Illuminate\Support\Str;
use Watson\Validating\ValidatingTrait;

/**
 * @property int            $id
 * @property string         $name
 * @property string         $slug
 * @property string         $template
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class IncidentTemplate extends Model
{
    use ValidatingTrait;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    protected $rules = [
        'name'     => 'required',
        'template' => 'required',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'template'];

    /**
     * Overrides the models boot method.
     */
    public static function boot()
    {
        parent::boot();

        self::saving(function ($template) {
            $template->slug = Str::slug($template->name);
        });
    }
}
