<?php

namespace CachetHQ\Cachet\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Watson\Validating\ValidatingTrait;

class Tag extends Model
{
    use ValidatingTrait;

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['name'];

    /**
     * Overrides the models boot method.
     *
     * @return void
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function components()
    {
        return $this->belongsToMany('CachetHQ\Cachet\Models\Component');
    }
}
