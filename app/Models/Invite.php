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
use Illuminate\Support\Str;

class Invite extends Model
{
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
     */
    public static function boot()
    {
        parent::boot();

        self::creating(function ($invite) {
            if (!$invite->code) {
                $invite->code = self::generateInviteCode();
            }
        });
    }

    /**
     * Returns an invite code.
     *
     * @return string
     */
    public static function generateInviteCode()
    {
        return str_random(20);
    }

    /**
     * Determines if the invite was claimed.
     *
     * @return bool
     */
    public function claimed()
    {
        return !is_null($this->claimed_at);
    }
}
