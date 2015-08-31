<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Commands\Incident;

class ReportMaintenanceCommand
{
    /**
     * The maintenance name.
     *
     * @var string
     */
    public $name;

    /**
     * The maintenance message.
     *
     * @var string
     */
    public $message;

    /**
     * Whether to notify about the maintenance or not.
     *
     * @var bool
     */
    public $notify;

    /**
     * Timestamp of when the maintenance is due to start.
     *
     * @var string
     */
    public $timestamp;

    /**
     * Create a new report maintenance command instance.
     *
     * @param string $name
     * @param string $message
     * @param bool   $notify
     * @param string $timestamp
     *
     * @return void
     */
    public function __construct($name, $message, $notify, $timestamp)
    {
        $this->name = $name;
        $this->message = $message;
        $this->notify = $notify;
        $this->timestamp = $timestamp;
    }
}
