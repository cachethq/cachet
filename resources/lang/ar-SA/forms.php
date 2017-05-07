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
        'username'         => 'Username',
        'password'         => 'كلمة السر',
        'site_name'        => 'اسم الموقع',
        'site_domain'      => 'عنوان النطاق',
        'site_timezone'    => 'إختر منطقتك الزمنية',
        'site_locale'      => 'اختر اللغة',
        'enable_google2fa' => 'تفعيل التحقق الثنائي من Google',
        'cache_driver'     => 'Cache Driver',
        'queue_driver'     => 'Queue Driver',
        'session_driver'   => 'Session Driver',
        'mail_driver'      => 'Mail Driver',
        'mail_host'        => 'إستضافة البريد الإلكتروني',
        'mail_address'     => 'Mail From Address',
        'mail_username'    => 'اسم البريد الإلكتروني',
        'mail_password'    => 'كلمة السر للبريد الإلكتروني',
    ],

    // Login form fields
    'login' => [
        'login'         => 'إسم المستخدم أو البريد الإلكتروني',
        'email'         => 'بريد إلكتروني',
        'password'      => 'كلمة السر',
        '2fauth'        => 'رمز التحقق',
        'invalid'       => 'اسم المستخدم أو كلمة المرور غير صحيحة',
        'invalid-token' => 'الرمز غير صحيح',
        'cookies'       => 'يجب عليك تفعيل الكوكيز لتسجيل الدخول.',
        'rate-limit'    => 'تم إجتياز الحد المسموح به.',
        'remember_me'   => 'تذكرني',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'الاسم',
        'status'             => 'الحالة',
        'component'          => 'المكون',
        'message'            => 'رسالة',
        'message-help'       => 'يمكنك إستخدام الـ Markdown.',
        'occurred_at'        => 'متى ظهرت هذه الحالة؟',
        'notify_subscribers' => 'تنبيه المشتركين؟',
        'visibility'         => 'ظهور الحالة',
        'stick_status'       => 'تثبيت الحالة',
        'stickied'           => 'مثبت',
        'not_stickied'       => 'غير مثبت',
        'public'             => 'ظاهر للعامة',
        'logged_in_only'     => 'ظاهر فقط للمستخدمين',
        'templates'          => [
            'name'     => 'الاسم',
            'template' => 'قالب',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    'schedules' => [
        'name'         => 'الاسم',
        'status'       => 'الحالة',
        'message'      => 'رسالة',
        'message-help' => 'يمكنك إستخدام الـ Markdown.',
        'scheduled_at' => 'When is this maintenance scheduled for?',
        'completed_at' => 'When did this maintenance complete?',
        'templates'    => [
            'name'     => 'الاسم',
            'template' => 'قالب',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'الاسم',
        'status'      => 'الحالة',
        'group'       => 'مجموعة',
        'description' => 'وصف',
        'link'        => 'رابط',
        'tags'        => 'الوسوم',
        'tags-help'   => 'Comma separated.',
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'                     => 'الاسم',
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
        'name'               => 'الاسم',
        'description'        => 'وصف',
        'start_at'           => 'Schedule start time',
        'timezone'           => 'Timezone',
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
        'name'                     => 'الاسم',
        'suffix'                   => 'Suffix',
        'description'              => 'وصف',
        'description-help'         => 'يمكنك إستخدام الـ Markdown.',
        'display-chart'            => 'Display chart on status page?',
        'default-value'            => 'Default value',
        'calc_type'                => 'Calculation of metrics',
        'type_sum'                 => 'Sum',
        'type_avg'                 => 'Average',
        'places'                   => 'Decimal places',
        'default_view'             => 'Default view',
        'threshold'                => 'How many minutes of threshold between metric points?',
        'visibility'               => 'Visibility',
        'visibility_authenticated' => 'Visible to authenticated users',
        'visibility_public'        => 'Visible to everybody',
        'visibility_hidden'        => 'Always hidden',

        'points' => [
            'value' => 'Value',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                    => 'اسم الموقع',
            'site-url'                     => 'Site URL',
            'display-graphs'               => 'Display graphs on status page?',
            'about-this-page'              => 'About this page',
            'days-of-incidents'            => 'How many days of incidents to show?',
            'banner'                       => 'Banner Image',
            'banner-help'                  => "It's recommended that you upload files no bigger than 930px wide .",
            'subscribers'                  => 'Allow people to signup to email notifications?',
            'skip_subscriber_verification' => 'Skip verifying of users? (Be warned, you could be spammed)',
            'automatic_localization'       => 'Automatically localise your status page to your visitor\'s language?',
            'enable_external_dependencies' => 'Enable Third Party Dependencies (Google Fonts, Trackers, etc...)',
            'show_timezone'                => 'Show the timezone the status page is running in.',
            'only_disrupted_days'          => 'Only show days containing incidents in the timeline?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics code',
            'analytics_gosquared'    => 'GoSquared Analytics code',
            'analytics_piwik_url'    => 'URL of your Piwik instance (without http(s)://)',
            'analytics_piwik_siteid' => 'Piwik\'s site id',
        ],
        'localization' => [
            'site-timezone'        => 'Site timezone',
            'site-locale'          => 'Site language',
            'date-format'          => 'Date format',
            'incident-date-format' => 'Incident timestamp format',
        ],
        'security' => [
            'allowed-domains'      => 'Allowed domains',
            'allowed-domains-help' => 'Comma separated. The domain set above is automatically allowed by default.',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Background color',
            'background-fills'        => 'Background fills (components, incidents, footer)',
            'banner-background-color' => 'Banner background color',
            'banner-padding'          => 'Banner padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
            'text-color'              => 'Text color',
            'dashboard-login'         => 'Show dashboard button in the footer?',
            'reds'                    => 'Red (used for errors)',
            'blues'                   => 'Blue (used for information)',
            'greens'                  => 'Green (used for success)',
            'yellows'                 => 'Yellow (used for alerts)',
            'oranges'                 => 'Orange (used for notices)',
            'metrics'                 => 'Metrics fill',
            'links'                   => 'Links',
        ],
    ],

    'user' => [
        'username'       => 'Username',
        'email'          => 'بريد إلكتروني',
        'password'       => 'كلمة السر',
        'api-token'      => 'API Token',
        'api-token-help' => 'Regenerating your API token will prevent existing applications from accessing Cachet.',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        'user_level'     => 'User Level',
        'levels'         => [
            'admin' => 'Admin',
            'user'  => 'User',
        ],
        '2fa' => [
            'help' => 'Enabling two factor authentication increases security of your account. You will need to download <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> or a similar app on to your mobile device. When you login you will be asked to provide a token generated by the app.',
        ],
        'team' => [
            'description' => 'Invite your team members by entering their email addresses here.',
            'email'       => 'Email #:id',
        ],
    ],

    'general' => [
        'timezone' => 'Select Timezone',
    ],

    // Buttons
    'add'    => 'Add',
    'save'   => 'Save',
    'update' => 'Update',
    'create' => 'Create',
    'edit'   => 'Edit',
    'delete' => 'Delete',
    'submit' => 'Submit',
    'cancel' => 'Cancel',
    'remove' => 'Remove',
    'invite' => 'Invite',
    'signup' => 'سجل',

    // Other
    'optional' => '* Optional',
];
