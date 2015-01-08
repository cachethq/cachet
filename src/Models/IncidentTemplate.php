<?php

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
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        self::saving(function ($template) {
            $template->slug = Str::slug($template->name);
        });
    }
}
