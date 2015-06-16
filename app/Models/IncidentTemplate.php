<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Watson\Validating\ValidatingTrait;

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
