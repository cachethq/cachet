<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Actions;

use Carbon\Carbon;

/**
 * This is the timed action window class.
 *
 * @author Graham Campbell<graham@alt-three.com>
 */
class Window
{
    /**
     * The window start time.
     *
     * @var \Carbon\Carbon
     */
    protected $start;

    /**
     * The window end time.
     *
     * @var \Carbon\Carbon
     */
    protected $end;

    /**
     * Create a new timed action window instance.
     *
     * @param \Carbon\Carbon $start
     * @param int            $length
     *
     * @return void
     */
    public function __construct(Carbon $start, $length)
    {
        $this->start = $start;
        $this->end = $start->copy()->addSeconds($length - 1);
    }

    /**
     * Get the window start time.
     *
     * @return \Carbon\Carbon
     */
    public function start()
    {
        return $this->start->copy();
    }

    /**
     * Get the window start end.
     *
     * @return \Carbon\Carbon
     */
    public function end()
    {
        return $this->end->copy();
    }
}
