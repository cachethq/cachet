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
use CachetHQ\Cachet\Presenters\UserPresenter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use McCool\LaravelAutoPresenter\HasPresenter;

/**
 * This is the user model.
 *
 * @author James Brooks <james@alt-three.com>
 */
class User extends Authenticatable implements HasPresenter
{
    use Notifiable, ValidatingTrait;

    /**
     * The admin level of user.
     *
     * @var int
     */
    const LEVEL_ADMIN = 1;

    /**
     * The general level of user.
     *
     * @var int
     */
    const LEVEL_USER = 2;

    /**
     * The model's attributes.
     *
     * @var string[]
     */
    protected $attributes = [
        'welcomed' => false,
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'username'          => 'string',
        'email'             => 'string',
        'google_2fa_secret' => 'string',
        'api_key'           => 'string',
        'active'            => 'bool',
        'level'             => 'int',
        'welcomed'          => 'bool',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = [
        'username',
        'password',
        'google_2fa_secret',
        'email',
        'api_key',
        'active',
        'level',
        'welcomed',
    ];

    /**
     * The properties that cannot be mass assigned.
     *
     * @var string[]
     */
    protected $guarded = [];

    /**
     * The hidden properties.
     *
     * These are excluded when we are serializing the model.
     *
     * @var string[]
     */
    protected $hidden = ['password', 'remember_token', 'google_2fa_secret'];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'username' => ['required', 'regex:/\A(?!.*[:;]-\))[ -~]+\z/'],
        'email'    => 'required|email',
        'password' => 'required',
    ];

    /**
     * Overrides the models boot method.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        self::creating(function ($user) {
            if (!$user->api_key) {
                $user->api_key = self::generateApiKey();
            }
        });
    }

    /**
     * Scope all admin users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAdmins(Builder $query)
    {
        return $query->where('level', '=', self::LEVEL_ADMIN);
    }

    /**
     * Scope all active users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive(Builder $query)
    {
        return $query->where('active', '=', true);
    }

    /**
     * Hash any password being inserted by default.
     *
     * @param string $password
     *
     * @return \CachetHQ\Cachet\Models\User
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);

        return $this;
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
        $user = static::where('api_key', $token)->firstOrFail($columns);

        return $user;
    }

    /**
     * Returns an API key.
     *
     * @return string
     */
    public static function generateApiKey()
    {
        return Str::random(20);
    }

    /**
     * Returns whether a user is at admin level.
     *
     * @return bool
     */
    public function getIsAdminAttribute()
    {
        return $this->level == self::LEVEL_ADMIN;
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

    /**
     * Get the presenter class.
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return UserPresenter::class;
    }
}
