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

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

/**
 * This is the invite class.
 *
 * @author Joseph Cohen <joe@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
class Invite extends Model
{
    use Notifiable;

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'email' => 'string',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['email'];

    /**
     * Overrides the models boot method.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        self::creating(function ($invite) {
            if (!$invite->code) {
                $invite->code = Str::random(20);
            }
        });
    }

    /**
     * Determines if the invite was claimed.
     *
     * @return bool
     */
    public function getIsClaimedAttribute()
    {
        return $this->claimed_at !== null;
    }
}
