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

    'dashboard'          => 'داشبورد',
    'writeable_settings' => 'The Cachet settings directory is not writeable. Please make sure that <code>./bootstrap/cachet</code> is writeable by the web server.',

    // Incidents
    'incidents' => [
        'title'                    => 'Incidents &amp; Schedule',
        'incidents'                => 'Incidents',
        'logged'                   => '{0} There are no incidents, good work.|You have logged one incident.|You have reported <strong>:count</strong> incidents.',
        'incident-create-template' => 'ایجاد قالب',
        'incident-templates'       => 'Incident Templates',
        'updates'                  => '{0} Zero Updates|One Update|:count Updates',
        'add'                      => [
            'title'   => 'Report an incident',
            'success' => 'Incident added.',
            'failure' => 'There was an error adding the incident, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit an incident',
            'success' => 'Incident updated.',
            'failure' => 'There was an error editing the incident, please try again.',
        ],
        'delete' => [
            'success' => 'The incident has been deleted and will not show on your status page.',
            'failure' => 'The incident could not be deleted, please try again.',
        ],
        'update' => [
            'title'    => 'Create new incident update',
            'subtitle' => 'Add an update to <strong>:incident</strong>',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Incident Templates',
            'add'   => [
                'title'   => 'Create an incident template',
                'message' => 'You should add an incident template.',
                'success' => 'Your new incident template has been created.',
                'failure' => 'Something went wrong with the incident template.',
            ],
            'edit' => [
                'title'   => 'ویرایش قالب',
                'success' => 'قالب رویداد به‌روزرسانی شده است.',
                'failure' => 'Something went wrong updating the incident template',
            ],
            'delete' => [
                'success' => 'The incident template has been deleted.',
                'failure' => 'The incident template could not be deleted, please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'تعمیرات زمان‌بندی شده',
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'زمان‌بندی شده در :timestamp',
        'add'          => [
            'title'   => 'افزودن تعمیرات زمان‌بندی شده',
            'success' => 'برنامه زمان‌بندی اضافه شد.',
            'failure' => 'خطایی در هنگام اضافه کردن برنامه زمان‌بندی رخ داده است، لطفا دوباره تلاش نمایید.',
        ],
        'edit' => [
            'title'   => 'ویرایش برنامه زمان‌بندی تعمیرات',
            'success' => 'برنامه زمان‌بندی به‌روزرسانی شد!',
            'failure' => 'خطایی در هنگام ویرایش برنامه زمان‌بندی رخ داده است، لطفا دوباره تلاش نمایید.',
        ],
        'delete' => [
            'success' => 'The scheduled maintenance has been deleted and will not show on your status page.',
            'failure' => 'The scheduled maintenance could not be deleted, please try again.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'کامپوننت ها',
        'component_statuses' => 'وضعیت‌های کامپوننت',
        'listed_group'       => 'دسته‌بندی شده تحت :name',
        'add'                => [
            'title'   => 'افزودن یک کامپوننت',
            'message' => 'شما باید یک کامپوننت اضافه نمایید.',
            'success' => 'کامپوننت ایجاد شد.',
            'failure' => 'خطایی در رابطه با کامپوننت رخ داده است، لطفا دوباره تلاش نمایید.',
        ],
        'edit' => [
            'title'   => 'ویرایش یک کامپوننت',
            'success' => 'کامپوننت به‌روزرسانی شد.',
            'failure' => 'خطایی در رابطه با کامپوننت رخ داده است، لطفا دوباره تلاش نمایید.',
        ],
        'delete' => [
            'success' => 'کامپوننت با موفقیت حذف شد!',
            'failure' => 'کامپوننت نمی‌تواند حذف شود، لطفا دوباره تلاش نمایید.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'گروه کامپوننت | گروه‌های کامپوننت',
            'no_components' => 'شما باید یک گروه کامپوننت اضافه نمایید.',
            'add'           => [
                'title'   => 'افزودن یک گروه کامپوننت',
                'success' => 'گروه کامپوننت اضافه شد.',
                'failure' => 'خطایی در رابطه با کامپوننت رخ داده است، لطفا دوباره تلاش نمایید.',
            ],
            'edit' => [
                'title'   => 'ویرایش یک گروه کامپوننت',
                'success' => 'گروه کامپوننت به‌روزرسانی شد.',
                'failure' => 'خطایی در رابطه با کامپوننت رخ داده است، لطفا دوباره تلاش نمایید.',
            ],
            'delete' => [
                'success' => 'Component group has been deleted!',
                'failure' => 'The component group could not be deleted, please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metrics',
        'add'     => [
            'title'   => 'Create a metric',
            'message' => 'You should add a metric.',
            'success' => 'Metric created.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit a metric',
            'success' => 'Metric updated.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will no longer display on your status page.',
            'failure' => 'The metric could not be deleted, please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => 'Subscribers',
        'description'      => 'Subscribers will receive email updates when incidents are created or components are updated.',
        'verified'         => 'Verified',
        'not_verified'     => 'Not verified',
        'subscriber'       => ':email, subscribed :date',
        'no_subscriptions' => 'Subscribed to all updates',
        'add'              => [
            'title'   => 'Add a new subscriber',
            'success' => 'Subscriber has been added!',
            'failure' => 'Something went wrong adding the subscriber, please try again.',
            'help'    => 'Enter each subscriber on a new line.',
        ],
        'edit' => [
            'title'   => 'Update subscriber',
            'success' => 'Subscriber has been updated!',
            'failure' => 'Something went wrong editing the subscriber, please try again.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Team',
        'member'      => 'Member',
        'profile'     => 'Profile',
        'description' => 'Team Members will be able to add, modify &amp; edit components and incidents.',
        'add'         => [
            'title'   => 'اضافه کردن یک عضو به تیم',
            'success' => 'عضو تیم اضافه شد.',
            'failure' => 'عضو تیم اضافه نشد، لطفا دوباره تلاش نمایید.',
        ],
        'edit' => [
            'title'   => 'به‌روزرسانی پروفایل',
            'success' => 'پروفایل به‌روزرسانی شد.',
            'failure' => 'خطایی در هنگام به‌روزرسانی پروفایل رخ داده است، لطفا دوباره تلاش نمایید.',
        ],
        'delete' => [
            'success' => 'عضو تیم حذف شده است و دیگر دسترسی به داشبورد را ندارد!',
            'failure' => 'عضو تیم اضافه نشد، لطفا دوباره تلاش نمایید.',
        ],
        'invite' => [
            'title'   => 'دعوت یک عضو جدید تیم',
            'success' => 'دعوت‌نامه ارسال شد',
            'failure' => 'دعوت‌نامه ارسال نشد، لطفا دوباره تلاش نمایید.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'تنظیمات',
        'app-setup' => [
            'app-setup'   => 'راه‌اندازی نرم‌افزار',
            'images-only' => 'تنها تصاویر قابلیت آپلود دارند.',
            'too-big'     => 'فایلی که شما آپلود کرده‌اید بسیار بزرگ است. تصویری کوچکتر از :size آپلود نمایید',
        ],
        'analytics' => [
            'analytics' => 'تجزیه و تحلیل',
        ],
        'log' => [
            'log' => 'Log',
        ],
        'localization' => [
            'localization' => 'بومی سازی',
        ],
        'customization' => [
            'customization' => 'شخصی سازی',
            'header'        => 'هدر (سر صفحه) سفارشی HTML',
            'footer'        => 'فوتر (پاورقی) سفارشی HTML',
        ],
        'mail' => [
            'mail'  => 'Mail',
            'test'  => 'Test',
            'email' => [
                'subject' => 'Test notification from Cachet',
                'body'    => 'This is a test notification from Cachet.',
            ],
        ],
        'security' => [
            'security'   => 'امنیت',
            'two-factor' => 'کاربران بدون ورود دو مرحله‌ای',
        ],
        'stylesheet' => [
            'stylesheet' => 'برگه استایل',
        ],
        'theme' => [
            'theme' => 'پوسته',
        ],
        'edit' => [
            'success' => 'تنظیمات ذخیره گردید.',
            'failure' => 'تنظیمات ذخیره نشده‌اند.',
        ],
        'credits' => [
            'credits'       => 'اعتبار',
            'contributors'  => 'مشارکت کننده‌ها',
            'license'       => 'Cachet is a BSD-3-licensed open source project, released by <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Backers & Sponsors',
            'backers'       => 'If you\'d like to support future development, check out the <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a> campaign.',
            'thank-you'     => 'Thank you to each and every one of the :count contributors.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'ورود به سیستم',
        'logged_in'  => 'You\'re logged in.',
        'welcome'    => 'خوش آمدید!',
        'two-factor' => 'لطفا توکن خود را وارد نمایید.',
    ],

    // Sidebar footer
    'help'        => 'راهنما',
    'status_page' => 'صفحه وضعیت',
    'logout'      => 'خروج',

    // Notifications
    'notifications' => [
        'notifications' => 'اعلان‌ها',
        'awesome'       => 'فوق العاده.',
        'whoops'        => 'اوه.',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'پشتیبانی از Cachet',
        'support_subtitle' => 'به حساب <strong><a href="https://patreon.com/jbrooksuk" target="_blank"> Patreon</a></strong> سر بزنید!',
        'news'             => 'آخرین اخبار',
        'news_subtitle'    => 'دریافت آخرین به‌روزرسانی‌ها',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'به صفحه وضعیت جدید خود خوش آمدید!',
        'message' => 'ضفحه وضعیت شما آماده است! شاید شما بخواهید این تنظیمات بیشتر را انجام دهید',
        'close'   => 'I\'m good thanks!',
        'steps'   => [
            'component'  => 'ایجاد کامپیوننت‌ها',
            'incident'   => 'Create an incident',
            'customize'  => 'شخصی سازی',
            'team'       => 'افزودن کاربر‌ان',
            'api'        => 'ساختن توکن وب‌سرویس',
            'two-factor' => 'Setup Two Factor Authentication',
        ],
    ],

];