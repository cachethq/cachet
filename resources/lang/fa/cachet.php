<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    // Components
    'components' => [
        'last_updated' => 'آخرین بروز رسانی :timestamp',
        'status'       => [
            1 => 'عملیاتی',
            2 => 'مسائل مربوط به عملکرد',
            3 => 'قطعی جزیی',
            4 => 'قطعی بزرگ',
        ],
        'group' => [
            'other' => 'Other Components',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'هیچ حادثه ای گزارش نشده است',
        'past'          => 'حوادث گذشته',
        'previous_week' => 'هفته گذشته',
        'next_week'     => 'هفته ی آتی',
        'scheduled'     => 'Scheduled Maintenance',
        'scheduled_at'  => '، برنامه ریزی شده :timestamp',
        'status'        => [
            0 => 'برنامه ریزی شده', // TODO: Hopefully remove this.
            1 => 'در دست بررسی',
            2 => 'شناسایی شده',
            3 => 'در دست بررسی تغييرات',
            4 => 'برطرف شده',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] System operational|[2,Inf] All systems are operational',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'Regenerate API Key',
        'revoke'     => 'Revoke API Key',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'ساعت گذشته',
            'hourly'    => '12 ساعت گذشته',
            'weekly'    => 'هفته',
            'monthly'   => 'ماه',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates',
        'button'    => 'Subscribe',
        'manage'    => [
            'no_subscriptions' => 'You\'re currently subscribed to all updates.',
            'my_subscriptions' => 'You\'re currently subscribed to the following updates.',
        ],
        'email' => [
            'subscribe'          => 'Subscribe to email updates.',
            'subscribed'         => 'You\'ve been subscribed to email notifications, please check your email to confirm your subscription.',
            'verified'           => 'Your email subscription has been confirmed. Thank you!',
            'manage'             => 'Manage your subscription.',
            'unsubscribe'        => 'Unsubscribe from email updates.',
            'unsubscribed'       => 'Your email subscription has been cancelled.',
            'failure'            => 'Something went wrong with the subscription.',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
            'verify'             => [
                'text'           => "Please confirm your email subscription to :app_name status updates.\n:link\nThank you, :app_name",
                'html-preheader' => 'Please confirm your email subscription to :app_name status updates.',
                'html'           => '<p>Please confirm your email subscription to :app_name status updates.</p><p><a href=":link">:link</a></p><p>Thank you, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "New maintenance has been scheduled on :app_name.\nThank you, :app_name",
                'html-preheader' => 'New maintenance has been scheduled on :app_name.',
                'html'           => '<p>New maintenance has been scheduled on :app_name.</p>',
            ],
            'incident' => [
                'text'           => "New incident has been reported on :app_name.\nThank you, :app_name",
                'html-preheader' => 'New incident has been reported on :app_name.',
                'html'           => '<p>New incident has been reported on :app_name.</p><p>Thank you, :app_name</p>',
            ],
            'component' => [
                'subject'        => 'Component Status Update',
                'text'           => 'The component :component_name has seen a status change. The component is now at :component_human_status.\nThank you, :app_name',
                'html-preheader' => 'Component Update from :app_name',
                'html'           => '<p>The component :component_name has seen a status change. The component is now at :component_human_status.</p><p>Thank you, :app_name</p>',
                'tooltip-title'  => 'Subscribe to notifications for :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text'           => "You have been invited to the team :app_name status page, to sign up follow the next link.\n:link\nThank you, :app_name",
                'html-preheader' => 'You have been invited to the team :app_name.',
                'html'           => '<p>You have been invited to the team :app_name status page, to sign up follow the next link.</p><p><a href=":link">:link</a></p><p>Thank you, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'نام‌نویسی',
        'username' => 'Username',
        'email'    => 'Email',
        'password' => 'Password',
        'success'  => 'حساب کاربری شما ایجاد گردید.',
        'failure'  => 'Something went wrong with the signup.',
    ],

    'system' => [
        'update' => 'There is a newer version of Cachet available. You can learn how to update <a href="https://docs.cachethq.io/docs/updating-cachet">here</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'بستن',
        'subscribe' => [
            'title'  => 'Subscribe to component updates',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => 'Subscribe',
        ],
    ],

    // Other
    'home'            => 'خانه',
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => ':app Status Page is powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'درباره این سایت',
    'rss-feed'        => 'خوراک (RSS)',
    'atom-feed'       => 'خوراک (Atom)',
    'feed'            => 'Status Feed',

];
