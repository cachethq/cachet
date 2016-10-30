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
 * This is the feed interface.
 *
 * @author James Brooks <james@alt-three.com>
 */
interface Feed
{
    /**
     * Returns the latest entries.
     *
     * @return array|null
     */
    public function latest();
}
