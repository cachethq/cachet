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
        'last_updated' => 'آخر تحديث :timestamp',
        'status'       => [
            1 => 'تشغيل',
            2 => 'مشاكل أداء',
            3 => 'إنقطاع جزئي',
            4 => 'إنقطاع أساسي',
        ],
        'group' => [
            'other' => 'مكونات أخرى',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'لا توجد حالات تم الإبلاغ عنها',
        'past'          => 'الأعطال السابقة',
        'previous_week' => 'Previous Week',
        'next_week'     => 'Next Week',
        'scheduled'     => 'صيانة مجدولة',
        'scheduled_at'  => ', مجدولة :timestamp',
        'status'        => [
            0 => 'Scheduled', // TODO: Hopefully remove this.
            1 => 'عملية التحقق جارية',
            2 => 'تم التعرف عليه',
            3 => 'تحت المراقبة',
            4 => 'تمّ إصلاحه',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] النظام يعمل | [2,Inf] جميع الأنظمة تعمل',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'إعادة إنشاء مفتاح الواجهة البرمجية',
        'revoke'     => 'إزالة مفتاح الواجهة البرمجية',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'آخِر ساعة',
            'hourly'    => 'آخر 12 ساعة',
            'weekly'    => 'أسبوع',
            'monthly'   => 'شهر',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates',
        'button'    => 'اشتراك',
        'manage'    => [
            'no_subscriptions' => 'أنت الآن مشترك للحصول على جميع التحديثات.',
            'my_subscriptions' => 'إنك مشترك حاليا في التحديثات التالية.',
        ],
        'email' => [
            'subscribe'          => 'إشترك في تحديثات البريد الإلكتروني.',
            'subscribed'         => 'تم تسجيلك في خدمة الإشعارات عبر البريد الإلكتروني، يُرجى تفقد بريدك الإلكتروني لتأكيد اشتراكك.',
            'verified'           => 'تم تأكيد الإشتراك عبر بريدك الإلكتروني. شكراً لك !',
            'manage'             => 'إدارة اشتراكاتك',
            'unsubscribe'        => 'إلغاء الإشتراك من خدمة التحديثات عبر البريد الإلكتروني.',
            'unsubscribed'       => 'تم إلغاء إشتراك بريدك الإلكتروني.',
            'failure'            => 'حدث خلل أثناء الإشتراك.',
            'already-subscribed' => 'لا يمكن الاشتراك عبر :emailلأنه مُشترك مِن قبل.',
            'verify'             => [
                'text'   => "الرجاء تأكيد إشتراك بريدك الإلكتروني في تحديثات الحالة إلى :app_name. \n :link",
                'html'   => '<p>الرجاء تأكيد إشتراك بريدك الإلكتروني في تحديثات الحالة إلى :app_name</p>',
                'button' => 'تأكيد الاشتراك',
            ],
            'maintenance' => [
                'subject' => '[صيانة مجدولة] :name',
            ],
            'incident' => [
                'subject' => '[حالة جديدة] :status: :name',
            ],
            'component' => [
                'subject'       => 'تم تحديث حالة المكون',
                'text'          => 'The component :component_name has seen a status change. The component is now at :component_human_status.\nThank you, :app_name',
                'html'          => '<p>The component :component_name has seen a status change. The component is now at :component_human_status.</p><p>Thank you, :app_name</p>',
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
        'title'    => 'تسجيل حساب',
        'username' => 'إسم المستخدِم',
        'email'    => 'بريد إلكتروني',
        'password' => 'كلمة السر',
        'success'  => 'Your account has been created.',
        'failure'  => 'حدث خطأ أثناء عملية تسجيل الحساب.',
    ],

    'system' => [
        'update' => 'There is a newer version of Cachet available. You can learn how to update <a href="https://docs.cachethq.io/docs/updating-cachet">here</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'إغلاق',
        'subscribe' => [
            'title'  => 'Subscribe to component updates',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => 'اشتراك',
        ],
    ],

    // Other
    'home'            => 'الرئيسية',
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'عن هذا الموقع',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
