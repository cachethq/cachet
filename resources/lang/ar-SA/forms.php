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

    // Setup form fields
    'setup' => [
        'email'            => 'بريد إلكتروني',
        'username'         => 'اسم المستخدم',
        'password'         => 'كلمة السر',
        'site_name'        => 'إسم الموقع',
        'site_domain'      => 'عنوان النطاق',
        'site_timezone'    => 'إختر منطقتك الزمنية',
        'site_locale'      => 'إختر لغتك',
        'enable_google2fa' => 'تشغيل ميزة غوغل للتحقق بخطوتين',
        'cache_driver'     => 'Cache Driver',
        'session_driver'   => 'Session Driver',
        'mail_driver'      => 'Mail Driver',
        'mail_host'        => 'مضيف البريد الإلكتروني',
        'mail_address'     => 'Mail From Address',
        'mail_username'    => 'إسم مستخدِم البريد الإلكتروني',
        'mail_password'    => 'كلمة السر للبريد الإلكتروني',
    ],

    // Login form fields
    'login' => [
        'login'         => 'إسم المستخدم أو عنوان البريد الإلكتروني',
        'email'         => 'البريد الإلكتروني',
        'password'      => 'كلمة السر',
        '2fauth'        => 'رمز التحقق',
        'invalid'       => 'إسم المستخدم أو كلمة المرور غير صحيحة',
        'invalid-token' => 'الرمز غير صحيح',
        'cookies'       => 'يجب عليك تفعيل الكوكيز لتسجيل الدخول.',
        'rate-limit'    => 'تم إجتياز الحد المسموح به.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'الإسم',
        'status'             => 'الحالة',
        'component'          => 'المُكوِّن',
        'message'            => 'رسالة',
        'message-help'       => 'يمكنك إستخدام الـ Markdown.',
        'scheduled_at'       => 'When to schedule the maintenance for?',
        'incident_time'      => 'متى ظهر هذا العَطَل ؟',
        'notify_subscribers' => 'إشعار المشتركين ؟',
        'visibility'         => 'ظهور حالة العَطَل',
        'public'             => 'ظاهر للعامة',
        'logged_in_only'     => 'ظاهر فقط للمستخدمين المسجلين',
        'templates'          => [
            'name'     => 'الإسم',
            'template' => 'قالب',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'الإسم',
        'status'      => 'الحالة',
        'group'       => 'مجموعة',
        'description' => 'الوصف',
        'link'        => 'الرابط',
        'tags'        => 'الوسوم',
        'tags-help'   => 'Comma separated.',
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'               => 'الإسم',
            'collapsing'         => 'Choose visibility of the group',
            'visible'            => 'Always expanded',
            'collapsed'          => 'Collapse the group by default',
            'collapsed_incident' => 'Collapse the group, but expand if there are issues',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'الإسم',
        'suffix'           => 'Suffix',
        'description'      => 'الوصف',
        'description-help' => 'يمكنك إستخدام الـ Markdown.',
        'display-chart'    => 'Display chart on status page?',
        'default-value'    => 'القيمة الإفتراضية',
        'calc_type'        => 'Calculation of metrics',
        'type_sum'         => 'Sum',
        'type_avg'         => 'المُعدَّل',
        'places'           => 'Decimal places',
        'default_view'     => 'العرض الإفتراضي',
        'threshold'        => 'How many minutes of threshold between metric points?',

        'points' => [
            'value' => 'القيمة',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'إسم الموقع',
            'site-url'               => 'رابط الموقع',
            'display-graphs'         => 'هل تريد عرض المنحنيات البيانية على صفحة الحالة ؟',
            'about-this-page'        => 'عن هذه الصفحة',
            'days-of-incidents'      => 'How many days of incidents to show?',
            'banner'                 => 'Banner Image',
            'banner-help'            => "It's recommended that you upload files no bigger than 930px wide .",
            'subscribers'            => 'Allow people to signup to email notifications?',
            'automatic_localization' => 'Automatically localise your status page to your visitor\'s language?',
        ],
        'analytics' => [
            'analytics_google'       => 'رمز تحليلات غوغل',
            'analytics_gosquared'    => 'رمز تحليلات غو سكوارد',
            'analytics_piwik_url'    => 'URL of your Piwik instance (without http(s)://)',
            'analytics_piwik_siteid' => 'مُعرّف بيويك Piwik الخاص بالموقع',
        ],
        'localization' => [
            'site-timezone'        => 'المنطقة الزمنية الخاصة بالموقع',
            'site-locale'          => 'لغة الموقع',
            'date-format'          => 'تنسيق التاريخ',
            'incident-date-format' => 'Incident timestamp format',
        ],
        'security' => [
            'allowed-domains'      => 'النطاقات المسموح بها',
            'allowed-domains-help' => 'Comma separated. The domain set above is automatically allowed by default.',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Background Color',
            'background-fills'        => 'Background fills (components, incidents, footer)',
            'banner-background-color' => 'Banner background color',
            'banner-padding'          => 'Banner padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
            'text-color'              => 'Text Color',
            'dashboard-login'         => 'Show dashboard button in the footer?',
            'reds'                    => 'الأحمر (يُستخدَم للأخطاء)',
            'blues'                   => 'الأزرق (يُستخدَم للأخبار)',
            'greens'                  => 'الأزرق (يُستخدَم في حالة النجاح)',
            'yellows'                 => 'الأصفر (يُستخدَم في التنبيهات)',
            'oranges'                 => 'Orange (used for notices)',
            'metrics'                 => 'Metrics fill',
            'links'                   => 'الروابط',
        ],
    ],

    'user' => [
        'username'       => 'إسم المستخدِم',
        'email'          => 'بريد إلكتروني',
        'password'       => 'كلمة السر',
        'api-token'      => 'API Token',
        'api-token-help' => 'Regenerating your API token will prevent existing applications from accessing Cachet.',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        'user_level'     => 'User Level',
        'levels'         => [
            'admin' => 'المدير',
            'user'  => 'المستخدِم',
        ],
        '2fa' => [
            'help' => 'Enabling two factor authentication increases security of your account. You will need to download <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> or a similar app on to your mobile device. When you login you will be asked to provide a token generated by the app.',
        ],
        'team' => [
            'description' => 'Invite your team members by entering their email addresses here.',
            'email'       => 'البريد الإلكتروني #:id',
        ],
    ],

    // Buttons
    'add'    => 'إضافة',
    'save'   => 'حفظ',
    'update' => 'تحديث',
    'create' => 'إنشاء',
    'edit'   => 'تعديل',
    'delete' => 'حذف',
    'submit' => 'إرسال',
    'cancel' => 'إلغاء',
    'remove' => 'إزالة',
    'invite' => 'دعوة',
    'signup' => 'تسجيل حساب',

    // Other
    'optional' => '* إختياري',
];
