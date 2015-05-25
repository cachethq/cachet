<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Segment;

interface RepositoryInterface
{
    /**
     * Returns the segment_write_key.
     *
     * @return string
     */
    public function fetch();
}
