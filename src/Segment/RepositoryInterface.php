<?php

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
