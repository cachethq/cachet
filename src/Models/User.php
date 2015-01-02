<?php

namespace CachetHQ\Cachet\Models;

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

/**
 * @property int           $id
 * @property string        $username
 * @property string        $password
 * @property string        $remember_token
 * @property string        $email
 * @property int           $active
 * @property int           $level
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class User extends Model implements UserInterface, RemindableInterface
{
    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The hidden properties.
     *
     * These are excluded when we are serializing the model.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The properties that cannot be mass assigned.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Hash any password being inserted by default.
     *
     * @param string $password
     *
     * @return $this
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);

        return $this;
    }

    /**
     * Returns a Gravatar URL for the users email address.
     *
     * @param int $size
     *
     * @return string
     */
    public function getGravatarAttribute($size = 200)
    {
        return sprintf('https://www.gravatar.com/avatar/%s?size=%d', md5($this->email), $size);
    }
}
