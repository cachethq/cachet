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
            'other' => 'کامپوننت‌های دیگر',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'هیچ حادثه ای گزارش نشده است',
        'past'          => 'حوادث گذشته',
        'previous_week' => 'هفته گذشته',
        'next_week'     => 'هفته ی آتی',
        'scheduled'     => 'تعمیرات زمان‌بندی شده',
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
        'major' => '[0,1] The service is experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'ساخت مجدد کلید API',
        'revoke'     => 'غیرفعال نمودن کلید API',
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
        'subscribe' => 'مشترک شوید تا از آخرین به‌روزرسانی‌ها آگاه شوید',
        'button'    => 'اشتراک اطلاع‌رسانی',
        'manage'    => [
            'no_subscriptions' => 'در حال حاضر شما برای همه به‌روزرسانی‌ها مشترک هستید.',
            'my_subscriptions' => 'در حال حاضر شما برای این به‌روزرسانی‌ها مشترک هستید.',
        ],
        'email' => [
            'subscribe'          => 'اشتراک در به‌روزرسانی‌های ایمیلی.',
            'subscribed'         => 'شما در اطلاع‌رسانی‌های ایمیلی مشترک هستید، لطفا ایمیل خود را جهت تایید اشتراک، کنترل نمایید.',
            'verified'           => 'ایمیل اشتراک شما با موفقیت تایید شد. با تشکر!',
            'manage'             => 'Manage your subscription',
            'unsubscribe'        => 'لغو اشتراک ایمیلی برای به‌روزرسانی‌ها.',
            'unsubscribed'       => 'اشتراک ایمیلی شما لغو گردید.',
            'failure'            => 'هنگام عضویت اشتراک خطایی رخ داد.',
            'already-subscribed' => 'امکان مشترک شدن :email وجود ندارد، زیرا در حال حاضر این ایمیل مشترک می‌باشد.',
            'verify'             => [
                'text'   => "Please confirm your email subscription to :app_name status updates.\n:link",
                'html'   => '<p>Please confirm your email subscription to :app_name status updates.</p>',
                'button' => 'Confirm Subscription',
            ],
            'maintenance' => [
                'subject' => '[Maintenance Scheduled] :name',
            ],
            'incident' => [
                'subject' => '[New Incident] :status: :name',
            ],
            'component' => [
                'subject' => 'به‌روزرسانی وضعیت کامپوننت',
                'text'    => 'کامپوننت :component یک تغییر وضعیت دارد. این کامپوننت هم‌اکنون در حالت :component_human_status قرار دارد.\n
با تشکر، :app_name',
                'html'          => '<p> کامپوننت با نام :component_name یک تغییر وضعیت دارد. کامپوننت هم‌اکنون در حالت :component_human_status قرار دارد. </p><p> با تشکر :app_name </p>',
                'tooltip-title' => 'Subscribe to notifications for :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "You have been invited to the team :app_name status page, to sign up follow the next link.\n:link\nThank you, :app_name",
                'html' => '<p>You have been invited to the team :app_name status page, to sign up follow the next link.</p><p><a href=":link">:link</a></p><p>Thank you, :app_name</p>',
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
            'button' => 'اشتراک اطلاع‌رسانی',
        ],
    ],

    // Other
    'home'            => 'خانه',
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'درباره این سایت',
    'rss-feed'        => 'خوراک (RSS)',
    'atom-feed'       => 'خوراک (Atom)',
    'feed'            => 'فید (خوراک) وضعیت',

];
