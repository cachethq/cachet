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

use Carbon\Carbon;
use DateTimeZone;

/**
 * This is the date factory class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
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
        return Carbon::createFromFormat($format, $time, $this->cachetTimezone)->setTimezone($this->appTimezone);
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
        return Carbon::createFromFormat($format, $time)->setTimezone($this->appTimezone);
    }

    /**
     * Make a Carbon instance from a string.
     *
     * @param string|null $time
     *
     * @throws \InvalidArgumentException
     *
     * @return \Carbon\Carbon
     */
    public function make($time = null)
    {
        return Carbon::parse($time)->setTimezone($this->cachetTimezone);
    }

    /**
     * Return the abbreviated timezone.
     *
     * @return string
     */
    public function getTimezone()
    {
        $dateTime = new Carbon();
        $dateTime->setTimeZone(new DateTimeZone($this->cachetTimezone));

        return $dateTime->format('T');
    }
}
