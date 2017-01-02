<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Composers;

use Illuminate\Contracts\View\View;

/**
 * This is the settings composer.
 *
 * @author James Brooks <james@alt-three.com>
 */
class SettingsComposer
{
    /**
     * Array of cache drivers.
     *
     * @var string[]
     */
    protected $cacheDrivers = [
        'apc'       => 'APC(u)',
        'array'     => 'Array',
        'database'  => 'Database',
        'file'      => 'File',
        'memcached' => 'Memcached',
        'redis'     => 'Redis',
    ];

    /**
     * Array of cache drivers.
     *
     * @var string[]
     */
    protected $mailDrivers = [
        'smtp'      => 'SMTP',
        'mail'      => 'Mail',
        'sendmail'  => 'Sendmail',
        'mailgun'   => 'Mailgun',
        'mandrill'  => 'Mandrill',
        'ses'       => 'Amazon SES',
        'sparkpost' => 'SparkPost',
        'log'       => 'Log (Testing)',
    ];

    /**
     * Array of queue drivers.
     *
     * @var string[]
     */
    protected $queueDrivers = [
        'null'       => 'None',
        'sync'       => 'Synchronous',
        'database'   => 'Database',
        'beanstalkd' => 'Beanstalk',
        'sqs'        => 'Amazon SQS',
        'redis'      => 'Redis',
    ];

    /**
     * Bind data to the view.
     *
     * @param \Illuminate\Contracts\View\View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->withCacheDrivers($this->cacheDrivers);
        $view->withMailDrivers($this->mailDrivers);
        $view->withQueueDrivers($this->queueDrivers);
    }
}
