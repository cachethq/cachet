<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Notifications\Schedule;

/**
 * This is the new schedule notification class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ScheduleUpdatedNotification extends AbstractScheduleNotification
{
    protected function getTranslationPrefix()
    {
        return 'notifications.schedule.update.';
    }
}
