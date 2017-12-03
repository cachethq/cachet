<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Presenters;

use Illuminate\Contracts\Support\Arrayable;
use Laravolt\Avatar\Facade as Avatar;
use McCool\LaravelAutoPresenter\BasePresenter;

/**
 * This is the user presenter class.
 *
 * @author James Brooks <james@bluebaytravel.co.uk>
 */
class UserPresenter extends BasePresenter implements Arrayable
{
    /**
     * Returns the users avatar.
     *
     * @return string
     */
    public function avatar()
    {
        if (setting('enable_external_dependencies')) {
            return sprintf('https://www.gravatar.com/avatar/%s?size=%d', md5(strtolower($this->email)), 200);
        }

        return Avatar::create($this->username)->toBase64();
    }

    /**
     * Convert the presenter instance to an array.
     *
     * @return string[]
     */
    public function toArray()
    {
        return array_merge($this->wrappedObject->toArray(), [
            'avatar' => $this->avatar(),
        ]);
    }
}
