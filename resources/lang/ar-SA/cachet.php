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
            0 => 'مجهول',
            1 => 'تشغيل',
            2 => 'مشاكل أداء',
            3 => 'انقطاع جزئي',
            4 => 'انقطاع اساسي',
        ],
        'group' => [
            'other' => 'مكونات أخرى',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'         => 'لا توجد حالات تم الإبلاغ عنها',
        'past'         => 'حالات سابقة',
        'stickied'     => 'حالات مثبتة',
        'scheduled'    => 'صيانة مجدولة',
        'scheduled_at' => ', مجدولة :timestamp',
        'posted'       => 'تم الإرسال :timestamp',
        'posted_at'    => 'Posted at :timestamp',
        'status'       => [
            1 => 'تحقيق',
            2 => 'تم التعرف عليه',
            3 => 'مراقبة',
            4 => 'تمّ اصلاحها',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'القادم',
            1 => 'جار المعالجة',
            2 => 'مكتملة',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] النظام يعمل | [2,Inf] جميع الأنظمة تعمل',
        'bad'   => '[0,1] النظام يواجه مشاكل | [2,Inf] بعض الأنظمة تواجه مشاكل',
        'major' => '[0,1] النظام يواجه مشاكل أساسية | [2,Inf] بعض الأنظمة تواجه مشاكل أساسية',
    ],

    'api' => [
        'regenerate' => 'إعادة إنشاء مفتاح الواجهة البرمجية',
        'revoke'     => 'إزالة مفتاح الواجهة البرمجية',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'الساعة الأخيرة',
            'hourly'    => 'آخر 12 ساعة',
            'weekly'    => 'أسبوع',
            'monthly'   => 'شهر',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'   => 'إشترك للحصول على التحديثات',
        'unsubscribe' => 'إلغاء الإشتراك في :link',
        'button'      => 'اشتراك',
        'manage'      => [
            'no_subscriptions' => 'أنت الآن مشترك للحصول على جميع التحديثات.',
            'my_subscriptions' => 'أنت كنت مشترك حاليا بالتحديثات التالية.',
        ],
        'email' => [
            'subscribe'          => 'إشترك في تحديثات البريد الإلكتروني.',
            'subscribed'         => 'تم تسجيلك في تنبيهات البريد الإلكتروني، الرجاء تفقد بريدك الإلكتروني لتأكيد الإشتراك.',
            'verified'           => 'تم تأكيد بريدك الإلكتروني. شكراً لك!',
            'manage'             => 'تحكم في الاشتراكات الخاص بك',
            'unsubscribe'        => 'إلغاء الإشتراك من تحديثات البريد الإلكتروني.',
            'unsubscribed'       => 'تم إلغاء إشتراك بريدك الإلكتروني.',
            'failure'            => 'حدث خلل أثناء الإشتراك.',
            'already-subscribed' => 'لا يمكن الاشتراك: البريد الإلكتروني نظراً لأنها كنت الاشتراك مسبقاً.',
        ],
    ],

    'signup' => [
        'title'    => 'سجل',
        'username' => 'Username',
        'email'    => 'بريد إلكتروني',
        'password' => 'كلمة السر',
        'success'  => 'Your account has been created.',
        'failure'  => 'حدث خطأ مع الاشتراك.',
    ],

    'system' => [
        'update' => 'There is a newer version of Cachet available. You can learn how to update <a href="https://docs.cachethq.io/docs/updating-cachet">here</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Close',
        'subscribe' => [
            'title'  => 'Subscribe to component updates',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => 'اشتراك',
        ],
    ],

    // Other
    'home'            => 'Home',
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Times are shown in :timezone.',
    'about_this_site' => 'About This Site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
