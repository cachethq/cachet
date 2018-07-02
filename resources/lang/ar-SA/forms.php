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
        'username'         => 'إسم المستخدِم',
        'password'         => 'كلمة السر',
        'site_name'        => 'إسم الموقع',
        'site_domain'      => 'عنوان النطاق',
        'site_timezone'    => 'إختر منطقتك الزمنية',
        'site_locale'      => 'إختر لغتك',
        'enable_google2fa' => 'تشغيل ميزة غوغل للتحقق بخطوتين',
        'cache_driver'     => 'Cache Driver',
        'queue_driver'     => 'Queue Driver',
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
        'email'         => 'بريد إلكتروني',
        'password'      => 'كلمة السر',
        '2fauth'        => 'رمز التحقق',
        'invalid'       => 'إسم المستخدم أو كلمة المرور غير صحيحة',
        'invalid-token' => 'الرمز غير صحيح',
        'cookies'       => 'يجب عليك تفعيل الكوكيز لتسجيل الدخول.',
        'rate-limit'    => 'تم إجتياز الحد المسموح به.',
        'remember_me'   => 'تذكرني',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'الإسم',
        'status'             => 'الحالة',
        'component'          => 'المُكوِّن',
        'component_status'   => 'حالة المكون',
        'message'            => 'رسالة',
        'message-help'       => 'يمكنك إستخدام الـ Markdown.',
        'occurred_at'        => 'متى ظهر هذا العَطَل ؟',
        'notify_subscribers' => 'إشعار المشتركين ؟',
        'notify_disabled'    => 'Due to scheduled maintenance, notifications about this incident or its components will be suppressed.',
        'visibility'         => 'ظهور حالة العَطَل',
        'stick_status'       => 'تثبيت العَطَل',
        'stickied'           => 'مثبت',
        'not_stickied'       => 'غير مثبت',
        'public'             => 'ظاهر للعامة',
        'logged_in_only'     => 'ظاهر فقط للمستخدمين المسجلين',
        'templates'          => [
            'name'     => 'الإسم',
            'template' => 'قالب',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    'schedules' => [
        'name'         => 'الإسم',
        'status'       => 'الحالة',
        'message'      => 'رسالة',
        'message-help' => 'يمكنك إستخدام الـ Markdown.',
        'scheduled_at' => 'When is this maintenance scheduled for?',
        'completed_at' => 'When did this maintenance complete?',
        'templates'    => [
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
            'name'                     => 'الإسم',
            'collapsing'               => 'Expand/Collapse options',
            'visible'                  => 'Always expanded',
            'collapsed'                => 'Collapse the group by default',
            'collapsed_incident'       => 'Collapse the group, but expand if there are issues',
            'visibility'               => 'Visibility',
            'visibility_public'        => 'Visible to public',
            'visibility_authenticated' => 'Visible only to logged in users',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'الإسم',
        'description'        => 'الوصف',
        'start_at'           => 'Schedule start time',
        'timezone'           => 'المنطقة الزمنية',
        'schedule_frequency' => 'Schedule frequency (in seconds)',
        'completion_latency' => 'Completion latency (in seconds)',
        'group'              => 'مجموعة',
        'active'             => 'Active?',
        'groups'             => [
            'name' => 'Group Name',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => 'الإسم',
        'suffix'                   => 'Suffix',
        'description'              => 'الوصف',
        'description-help'         => 'يمكنك إستخدام الـ Markdown.',
        'display-chart'            => 'Display chart on status page?',
        'default-value'            => 'القيمة الإفتراضية',
        'calc_type'                => 'Calculation of metrics',
        'type_sum'                 => 'Sum',
        'type_avg'                 => 'المُعدَّل',
        'places'                   => 'Decimal places',
        'default_view'             => 'العرض الإفتراضي',
        'threshold'                => 'How many minutes of threshold between metric points?',
        'visibility'               => 'Visibility',
        'visibility_authenticated' => 'Visible to authenticated users',
        'visibility_public'        => 'Visible to everybody',
        'visibility_hidden'        => 'Always hidden',

        'points' => [
            'value' => 'القيمة',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                             => 'إسم الموقع',
            'site-url'                              => 'رابط الموقع',
            'display-graphs'                        => 'هل تريد عرض المنحنيات البيانية على صفحة الحالة ؟',
            'about-this-page'                       => 'عن هذه الصفحة',
            'days-of-incidents'                     => 'How many days of incidents to show?',
            'time_before_refresh'                   => 'Status page refresh rate (in seconds)',
            'major_outage_rate'                     => 'Major outage threshold (in %)',
            'banner'                                => 'Banner Image',
            'banner-help'                           => "It's recommended that you upload files no bigger than 930px wide",
            'subscribers'                           => 'Allow people to signup to email notifications?',
            'suppress_notifications_in_maintenance' => 'Suppress notifications when incident occurs during maintenance period?',
            'skip_subscriber_verification'          => 'Skip verifying of users? (Be warned, you could be spammed)',
            'automatic_localization'                => 'Automatically localise your status page to your visitor\'s language?',
            'enable_external_dependencies'          => 'Enable Third Party Dependencies (Google Fonts, Trackers, etc...)',
            'show_timezone'                         => 'Show the timezone the status page is running in',
            'only_disrupted_days'                   => 'Only show days containing incidents in the timeline?',
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
            'allowed-domains'           => 'النطاقات المسموح بها',
            'allowed-domains-help'      => 'Comma separated. The domain set above is automatically allowed by default.',
            'always-authenticate'       => 'Always authenticate',
            'always-authenticate-help'  => 'Require login to view any Cachet page',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Background color',
            'background-fills'        => 'Background fills (components, incidents, footer)',
            'banner-background-color' => 'Banner background color',
            'banner-padding'          => 'Banner padding',
            'fullwidth-banner'        => 'Enable full width banner?',
            'text-color'              => 'لون النص',
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
            'email'       => 'عنوان البريد الإلكتروني الخاص بأعضاء فريقك',
        ],
    ],

    'general' => [
        'timezone' => 'إختر المنطقة الزمنية',
    ],

    // Buttons
    'add'            => 'إضافة',
    'save'           => 'حفظ',
    'update'         => 'تحديث',
    'create'         => 'إنشاء',
    'edit'           => 'تعديل',
    'delete'         => 'حذف',
    'submit'         => 'إرسال',
    'cancel'         => 'إلغاء',
    'remove'         => 'إزالة',
    'invite'         => 'دعوة',
    'signup'         => 'تسجيل حساب',
    'manage_updates' => 'إدارة التحديثات',

    // Other
    'optional' => '* إختياري',
];
