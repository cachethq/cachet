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

use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\View\View;

class MailConfigComposer
{

    /**
     * Array of mail drivers.
     *
     * @var string[]
     */
    protected $mailDrivers = [
        'smtp'     => 'SMTP',
        'mail'     => 'Mail',
        'sendmail' => 'Sendmail',
        'mailgun'  => 'Mailgun',
        'mandrill' => 'Mandrill',
        'sparkpost' => 'SparkPost',
        'log'       => 'Log (Testing)',
    ];

    /**
     * The illuminate config instance.
     *
     * @var \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * Create a new theme composer.
     *
     * @param \Illuminate\Contracts\Config\Repository $config
     *
     */
    public function __construct(Repository $config)
    {
        $this->config = $config;
    }

    /**
     * Timezones and Locales composer.
     *
     * @param \Illuminate\Contracts\View\View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->withMailDrivers($this->mailDrivers);
        $view->withMailConfig($this->config->get('mail'));
    }
}
