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

/**
 * This is the meta model class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class Meta extends Model
{
    use ValidatingTrait;

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'id'        => 'int',
        'key'       => 'string',
        'value'     => 'json',
        'meta_id'   => 'int',
        'meta_type' => 'string',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = [
        'key',
        'value',
        'meta_id',
        'meta_type',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'id'        => 'nullable|int|min:1',
        'key'       => 'required|string',
        'value'     => 'nullable',
        'meta_id'   => 'required|int',
        'meta_type' => 'required|string',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meta';

   /**
    * Get all of the owning meta models.
    *
    * @return \Illuminate\Database\Eloquent\Relations\MorphTo
    */
   public function meta()
   {
       return $this->morphTo();
   }
}
