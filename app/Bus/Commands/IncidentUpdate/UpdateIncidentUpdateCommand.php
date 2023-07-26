<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\IncidentUpdate;

use CachetHQ\Cachet\Models\IncidentUpdate;
use CachetHQ\Cachet\Models\User;

/**
 * This is the update incident update command.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class UpdateIncidentUpdateCommand
{
    /**
     * The incident update.
     *
     * @var \CachetHQ\Cachet\Models\IncidentUpdate
     */
    public $update;

    /**
     * The incident status.
     *
     * @var int
     */
    public $status;

    /**
     * The incident message.
     *
     * @var string
     */
    public $message;

    /**
     * The user.
     *
     * @var \CachetHQ\Cachet\Models\User
     */
    public $user;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'status'  => 'nullable|int|min:1|max:4',
        'message' => 'nullable|string',
    ];

    /**
     * Create a new update incident update command instance.
     *
     * @param \CachetHQ\Cachet\Models\IncidentUpdate $update
     * @param string                                 $status
     * @param string                                 $message
     * @param \CachetHQ\Cachet\Models\User           $user
     *
     * @return void
     */
    public function __construct(IncidentUpdate $update, $status, $message, User $user)
    {
        $this->update = $update;
        $this->status = $status;
        $this->message = $message;
        $this->user = $user;
    }
}
