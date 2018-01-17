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
        'email'            => 'ایمیل',
        'username'         => 'نام‌کاربری',
        'password'         => 'رمزعبور',
        'site_name'        => 'عنوان سایت',
        'site_domain'      => 'دامین سایت',
        'site_timezone'    => 'منطقه زمانی خود را انتخاب نمایید',
        'site_locale'      => 'زبان خود را انتخاب کنید',
        'enable_google2fa' => 'فعال کردن ورود دو مرحله‌ای گوگل',
        'cache_driver'     => 'درایور کش',
        'queue_driver'     => 'Queue Driver',
        'session_driver'   => 'درایور Session',
        'mail_driver'      => 'درایور ایمیل (ارسال ایمیل)',
        'mail_host'        => 'میزبان ایمیل',
        'mail_address'     => 'آدرس ایمیل ارسال کننده',
        'mail_username'    => 'نام‌کاربری ایمیل',
        'mail_password'    => 'رمزعبور ایمیل',
    ],

    // Login form fields
    'login' => [
        'login'         => 'نام‌کاربری یا ایمیل',
        'email'         => 'ایمیل',
        'password'      => 'رمزعبور',
        '2fauth'        => 'کد احراز هویت',
        'invalid'       => 'نام‌کاربری یا رمز‌عبور اشتباه است',
        'invalid-token' => 'توکن اشتباه است',
        'cookies'       => 'شما باید کوکی‌ مرورگر خود را فعال نمایید تا بتوانید وارد شوید.',
        'rate-limit'    => 'تعداد درخواست‌ها به حداکثر رسیده است.',
        'remember_me'   => 'Remember me',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'نام',
        'status'             => 'وضعیت',
        'component'          => 'کامپوننت',
        'message'            => 'پیام',
        'message-help'       => 'شاید شما بخواهید از Markdown نیز استفاده کنید.',
        'occurred_at'        => 'When did this incident occur?',
        'notify_subscribers' => 'مشترکین مطلع شوند؟',
        'visibility'         => 'نمایانی رویداد',
        'stick_status'       => 'Stick Incident',
        'stickied'           => 'Stickied',
        'not_stickied'       => 'Not Stickied',
        'public'             => 'قابل مشاهده توسط عموم',
        'logged_in_only'     => 'تنها برای کاربران وارد شده قابل مشاهده است',
        'templates'          => [
            'name'     => 'نام',
            'template' => 'قالب',
            'twig'     => 'قالب رویداد‌ها می‌تواند از زبان قالب‌سازی <a href="http://twig.sensiolabs.org/" target="_blank"> Twig </a> پیروی کند.',
        ],
    ],

    'schedules' => [
        'name'         => 'نام',
        'status'       => 'وضعیت',
        'message'      => 'پیام',
        'message-help' => 'شاید شما بخواهید از Markdown نیز استفاده کنید.',
        'scheduled_at' => 'When is this maintenance scheduled for?',
        'completed_at' => 'When did this maintenance complete?',
        'templates'    => [
            'name'     => 'نام',
            'template' => 'قالب',
            'twig'     => 'قالب رویداد‌ها می‌تواند از زبان قالب‌سازی <a href="http://twig.sensiolabs.org/" target="_blank"> Twig </a> پیروی کند.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'نام',
        'status'      => 'وضعیت',
        'group'       => 'گروه',
        'description' => 'توضیحات',
        'link'        => 'لینک',
        'tags'        => 'تگ‌ها',
        'tags-help'   => 'با کاما جدا شده.',
        'enabled'     => 'کامپوننت فعال باشد؟',

        'groups' => [
            'name'                     => 'نام',
            'collapsing'               => 'Expand/Collapse options',
            'visible'                  => 'همیشه به حالت باز باشد',
            'collapsed'                => 'گروه به طور پیش‌فرض به صورت بسته باشد',
            'collapsed_incident'       => 'گروه را بسته نگه‌ دار، اما در صورتی که از نوع مشکل است باز کن',
            'visibility'               => 'Visibility',
            'visibility_public'        => 'Visible to public',
            'visibility_authenticated' => 'Visible only to logged in users',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'نام',
        'description'        => 'توضیحات',
        'start_at'           => 'Schedule start time',
        'timezone'           => 'Timezone',
        'schedule_frequency' => 'Schedule frequency (in seconds)',
        'completion_latency' => 'Completion latency (in seconds)',
        'group'              => 'گروه',
        'active'             => 'Active?',
        'groups'             => [
            'name' => 'Group Name',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => 'نام',
        'suffix'                   => 'پسوند',
        'description'              => 'توضیحات',
        'description-help'         => 'شاید شما بخواهید از Markdown نیز استفاده کنید.',
        'display-chart'            => 'نمودار در صفحه وضعیت نمایش داده شود؟',
        'default-value'            => 'مقدار پیش‌فرض',
        'calc_type'                => 'محاسبه معیارها',
        'type_sum'                 => 'جمع',
        'type_avg'                 => 'میانگین',
        'places'                   => 'اعشار',
        'default_view'             => 'نمای پیش فرض',
        'threshold'                => 'چند دقیقه از آستانه بین نقاط معیار‌ها باشد؟',
        'visibility'               => 'Visibility',
        'visibility_authenticated' => 'Visible to authenticated users',
        'visibility_public'        => 'Visible to everybody',
        'visibility_hidden'        => 'Always hidden',

        'points' => [
            'value' => 'مقدار',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                    => 'عنوان سایت',
            'site-url'                     => 'آدرس سایت',
            'display-graphs'               => 'نمودار(گراف) در صفحه وضعیت نمایش داده شود؟',
            'about-this-page'              => 'درباره این صفحه',
            'days-of-incidents'            => 'چند روز از رویداد‌ها نمایش داده شوند؟',
            'time_before_refresh'          => 'Status page refresh rate (in seconds).',
            'banner'                       => 'تصویر بنر',
            'banner-help'                  => 'پیشنهاد می‌شود که شما تصاویری با پهنای بیشتر از 930px آپلود نکنید.',
            'subscribers'                  => 'آیا به کاربران اجازه ثبت‌‌نام برای اعلان‌های ایمیلی داده شود؟',
            'skip_subscriber_verification' => 'Skip verifying of users? (Be warned, you could be spammed)',
            'automatic_localization'       => 'به صورت خودکار صفحه وضعیت به زبان مشاهده‌کنندگان تغییر زبان دهد؟',
            'enable_external_dependencies' => 'Enable Third Party Dependencies (Google Fonts, Trackers, etc...)',
            'show_timezone'                => 'Show the timezone the status page is running in.',
            'only_disrupted_days'          => 'Only show days containing incidents in the timeline?',
        ],
        'analytics' => [
            'analytics_google'       => 'کد آمارگیر گوگل',
            'analytics_gosquared'    => 'کد آمارگیر GoSquared',
            'analytics_piwik_url'    => 'آدرس آمارگیر Piwik (بدون //:http)',
            'analytics_piwik_siteid' => 'شناسه سایت Piwik',
        ],
        'localization' => [
            'site-timezone'        => 'منطقه‌زمانی سایت',
            'site-locale'          => 'زبان سایت',
            'date-format'          => 'فرمت تاریخ',
            'incident-date-format' => 'فرمت استمپ‌زمان (timestamp) رویداد',
        ],
        'security' => [
            'allowed-domains'      => 'دامین‌های مجاز',
            'allowed-domains-help' => 'جدا شده توسط کاما، دامین‌هایی که در بالا قرار دارند به صورت پیش‌فرض مجاز هستند.',
        ],
        'stylesheet' => [
            'custom-css' => 'برگه style سفارشی',
        ],
        'theme' => [
            'background-color'        => 'رنگ پس‌زمینه',
            'background-fills'        => 'پس زمینه پر (کامپوننت‌ها، رویداد‌ها، پایین صفحه)',
            'banner-background-color' => 'رنگ پس‌زمینه بنر',
            'banner-padding'          => 'فاصله‌های بنر',
            'fullwidth-banner'        => 'آیا بنر با پهنای کامل فعال شود؟',
            'text-color'              => 'رنگ متن',
            'dashboard-login'         => 'کلید داشبود در پایین صفحه نمایش داده شود؟',
            'reds'                    => 'قرمز (مورد استفاده برای خطاها)',
            'blues'                   => 'آبی (مورد استفاده برای اطلاعات)',
            'greens'                  => 'سبز (مورد استفاده برای موفقیت)',
            'yellows'                 => 'زرد (مورد استفاده برای هشدار)',
            'oranges'                 => 'نارنجی (مورد استفاده برای اعلامیه)',
            'metrics'                 => 'پرکردن معیار‌ها',
            'links'                   => 'لینک‌ها',
        ],
    ],

    'user' => [
        'username'       => 'نام‌کاربری',
        'email'          => 'ایمیل',
        'password'       => 'رمزعبور',
        'api-token'      => 'توکن API',
        'api-token-help' => 'ساختن مجدد توکن API دسترسی ابزار‌ها و نرم‌افزار‌های فعلی را به Cachet مسدود می‌نماید.',
        'gravatar'       => 'تصویر پروفایل خود را در گراواتار تغییر دهید.',
        'user_level'     => 'سطح کاربر',
        'levels'         => [
            'admin' => 'مدیر',
            'user'  => 'کاربر',
        ],
        '2fa' => [
            'help' => 'فعال کردن ورود دو مرحله‌ای امنیت حساب‌کاربری شما را افزایش می‌دهد. شما نیاز به دانلود نرم‌افزار <a href="https://support.google.com/accounts/answer/1066447?hl=en"> Google Authenticator</a> و یا یک نرم‌افزار مشابه را بر روی تلفن‌همراه خود خواهید داشت. وقتی شما وارد سیستم شوید، از شما یک کدی که توسط این نرم‌افزار تولید شده است،درخواست می‌شود.',
        ],
        'team' => [
            'description' => 'از اعضای تیم خود با وارد کردن ایمیل آن‌ها در کادر زیر دعوت کنید.',
            'email'       => 'ایمیل #:Id',
        ],
    ],

    'general' => [
        'timezone' => 'Select Timezone',
    ],

    // Buttons
    'add'            => 'ﺍﻓﺰﻭﺩﻥ',
    'save'           => 'ذخيره',
    'update'         => 'به‌روزرسانی',
    'create'         => 'ساختن',
    'edit'           => 'ويرايش',
    'delete'         => 'حذف',
    'submit'         => 'ارسال',
    'cancel'         => 'انصراف',
    'remove'         => 'حذف',
    'invite'         => 'دعوت کردن',
    'signup'         => 'نام‌نویسی',
    'manage_updates' => 'Manage Updates',

    // Other
    'optional' => '* اختیاری',
];
