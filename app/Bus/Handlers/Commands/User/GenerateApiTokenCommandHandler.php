<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\User;

use CachetHQ\Cachet\Bus\Commands\User\GenerateApiTokenCommand;
use CachetHQ\Cachet\Bus\Events\User\UserRegeneratedApiTokenEvent;
use CachetHQ\Cachet\Models\User;

class GenerateApiTokenCommandHandler
{
    /**
     * Handle the generate api key command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\User\GenerateApiTokenCommand $command
     *
     * @return void
     */
    public function handle(GenerateApiTokenCommand $command)
    {
        $user = $command->user;

        $user->update(['api_key' => User::generateApiKey()]);

        event(new UserRegeneratedApiTokenEvent($user));
    }
}
