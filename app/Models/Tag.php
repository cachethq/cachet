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

use CachetHQ\Cachet\Models\Traits\SearchableTrait;
use CachetHQ\Cachet\Models\Traits\SortableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    use SearchableTrait, SortableTrait;

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'name' => 'string',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['name'];

    /**
     * The searchable fields.
     *
     * @var string[]
     */
    protected $searchable = [
        'id',
        'name',
        'slug',
    ];

    /**
     * The sortable fields.
     *
     * @var string[]
     */
    protected $sortable = [
        'id',
        'name',
        'slug',
    ];

    /**
     * Overrides the models boot method.
     */
    public static function boot()
    {
        parent::boot();

        self::creating(function ($tag) {
            $tag->slug = Str::slug($tag->name);
        });
    }

    /**
     * Tags can have many components.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function components()
    {
        return $this->belongsToMany(Component::class);
    }
}
