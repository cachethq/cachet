<?php

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class IncidentTemplate extends Model
{
    use ValidatingTrait;

    protected $rules = [
        'name'     => 'alpha|required',
        'template' => 'required',
    ];

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
