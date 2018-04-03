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
            3 => 'إنقطاع جزئي',
            4 => 'إنقطاع أساسي',
        ],
        'group' => [
            'other' => 'مكونات أخرى',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'         => 'لا توجد حالات تم الإبلاغ عنها',
        'past'         => 'الأعطال السابقة',
        'stickied'     => 'أعطال مثبتة',
        'scheduled'    => 'صيانة',
        'scheduled_at' => ', مجدولة :timestamp',
        'posted'       => 'تم الإرسال :timestamp',
        'posted_at'    => 'نُشِر على :timestamp',
        'status'       => [
            1 => 'عملية التحقق جارية',
            2 => 'تم التعرف عليه',
            3 => 'تحت المراقبة',
            4 => 'تمّ إصلاحه',
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
        'good'  => '[0,1]System operational|[2,*]All systems are operational',
        'bad'   => '[0,1] النظام يواجه مشاكل|[2,Inf] بعض الأنظمة تواجه مشاكل',
        'major' => '[0,1] النظام يواجه مشاكل أساسية|[2,Inf] بعض الأنظمة تواجه مشاكل أساسية',
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
        'subscribe'   => 'إشترك للحصول على التحديثات',
        'unsubscribe' => 'إلغاء الإشتراك في :link',
        'button'      => 'اشتراك',
        'manage'      => [
            'no_subscriptions' => 'أنت الآن مشترك للحصول على جميع التحديثات.',
            'my_subscriptions' => 'إنك مشترك حاليا في التحديثات التالية.',
            'manage_at_link'   => 'Manage your subscriptions at :link',
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

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => 'Details and updates about the :name incident that occurred on :date',
            'schedule'  => 'Details about the scheduled maintenance period :name starting :startDate',
            'subscribe' => 'Subscribe to :app in order to receive updates of incidents and scheduled maintenance periods',
            'overview'  => 'Stay up to date with the latest service updates from :app.',
        ],
    ],

    // Other
    'home'            => 'الرئيسية',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Times are shown in :timezone.',
    'about_this_site' => 'عن هذا الموقع',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
