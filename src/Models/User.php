<?php

namespace CachetHQ\Cachet\Models;

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Hash;
use Watson\Validating\ValidatingTrait;

/**
 * @property int            $id
 * @property string         $username
 * @property string         $password
 * @property string         $remember_token
 * @property string         $email
 * @property int            $active
 * @property int            $level
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class User extends Model implements UserInterface, RemindableInterface
{
    use RemindableTrait, UserTrait, ValidatingTrait;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    protected $rules = [
        'username' => 'required|alpha|unique:users',
        'email'    => 'required|email|unique:users',
        'password' => 'required',
    ];

    /**
     * The hidden properties.
     *
     * These are excluded when we are serializing the model.
     *
     * @var string[]
     */
    protected $hidden = ['password', 'remember_token', 'google_2fa_secret'];

    /**
     * The properties that cannot be mass assigned.
     *
     * @var string[]
     */
    protected $guarded = [];

    /**
     * Overrides the models boot method.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        self::creating(function ($user) {
            $user->api_key = self::generateApiKey();
        });
    }

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

    /**
     * Find by api_key, or throw an exception.
     *
     * @param string   $token
     * @param string[] $columns
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     *
     * @return \CachetHQ\Cachet\Models\User
     */
    public static function findByApiToken($token, $columns = ['*'])
    {
        $user = static::where('api_key', $token)->first($columns);

        if (!$user) {
            throw new ModelNotFoundException();
        }

        return $user;
    }

    /**
     * Returns an API key.
     *
     * @return string
     */
    public static function generateApiKey()
    {
        return str_random(20);
    }

    /**
     * Returns whether a user is at admin level.
     *
     * @return bool
     */
    public function getIsAdminAttribute()
    {
        return (bool) $this->level;
    }

    /**
     * Returns if a user has enabled two factor authentication.
     *
     * @return bool
     */
    public function getHasTwoFactorAttribute()
    {
        return trim($this->google_2fa_secret) !== '';
    }
}
