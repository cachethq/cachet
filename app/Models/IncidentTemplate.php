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
use Illuminate\Support\Str;

class IncidentTemplate extends Model
{
    use ValidatingTrait;

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'name'     => 'string',
        'slug'     => 'string',
        'template' => 'string',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'slug', 'template'];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'     => 'required|string',
        'template' => 'required|string',
    ];

    /**
     * Overrides the models boot method.
     */
    public static function boot()
    {
        parent::boot();

        self::saving(function ($template) {
            if (!$template->slug) {
                $template->slug = Str::slug($template->name);
            }
        });
    }

    /**
     * Finds a template by the slug.
     *
     * @param string   $slug
     * @param string[] $columns
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public static function forSlug($slug, $columns = ['*'])
    {
        $template = static::where('slug', '=', $slug)->firstOrFail($columns);

        return $template;
    }
}
