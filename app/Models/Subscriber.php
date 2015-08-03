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

use CachetHQ\Cachet\Presenters\SubscriberPresenter;
use Illuminate\Database\Eloquent\Model;
use McCool\LaravelAutoPresenter\HasPresenter;
use Watson\Validating\ValidatingTrait;

class Subscriber extends Model implements HasPresenter
{
    use ValidatingTrait;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    protected $rules = [
        'email' => 'required|email|unique:subscribers',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['email'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['verified_at'];

    /**
     * Overrides the models boot method.
     */
    public static function boot()
    {
        parent::boot();

        self::creating(function ($user) {
            if (!$user->verify_code) {
                $user->verify_code = self::generateVerifyCode();
            }
        });
    }

    /**
     * Determines if the subscriber is verified.
     *
     * @return bool
     */
    public function verified()
    {
        return !is_null($this->verified_at);
    }

    /**
     * Returns an new verify code.
     *
     * @return string
     */
    public static function generateVerifyCode()
    {
        return str_random(42);
    }

    /**
     * Get the presenter class.
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return SubscriberPresenter::class;
    }
}
