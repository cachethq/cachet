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
 * This is the releases interface.
 *
 * @author James Brooks <james@alt-three.com>
 */
interface Releases
{
    /**
     * Returns the latest release.
     *
     * @return string
     */
    public function latest();
}
