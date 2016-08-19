<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Integrations\Contracts;

/**
 * This is the autoloader interface.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
interface Autoloader
{
    /**
     * Updates the autoloader.
     *
     * @throws \CachetHQ\Cachet\Integrations\Exceptions\Autoloader\UpdateFailedException
     *
     * @return void
     */
    public function update();
}
