<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Dates;

use Jenssegers\Date\Date;

class DateFactory
{
    /**
     * The application timezone.
     *
     * @var string
     */
    protected $appTimezone;

    /**
     * The cachet timezone.
     *
     * @var string
     */
    protected $cachetTimezone;

    /**
     * Create a new date factory instance.
     *
     * @param string $appTimezone
     * @param string $cachetTimezone
     *
     * @return void
     */
    public function __construct($appTimezone, $cachetTimezone)
    {
        $this->appTimezone = $appTimezone;
        $this->cachetTimezone = $cachetTimezone;
    }

    /**
     * Create a Carbon instance from a specific format.
     *
     * @param string $format
     * @param string $time
     *
     * @throws \InvalidArgumentException
     *
     * @return \Carbon\Carbon
     */
    public function create($format, $time)
    {
        return Date::createFromFormat($format, $time, $this->cachetTimezone)->setTimezone($this->appTimezone);
    }

    /**
     * Create a Carbon instance from a specific format.
     *
     * We're also going to make sure the timezone information is correct.
     *
     * @param string $format
     * @param string $time
     *
     * @throws \InvalidArgumentException
     *
     * @return \Carbon\Carbon
     */
    public function createNormalized($format, $time)
    {
        return $this->createFromFormat($format, $time)->setTimezone($this->appTimezone);
    }
}
