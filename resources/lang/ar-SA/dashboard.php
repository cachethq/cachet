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

    'dashboard'          => 'لوحة التحكم',
    'writeable_settings' => 'The Cachet settings directory is not writeable. Please make sure that <code>./bootstrap/cachet</code> is writeable by the web server.',

    // Incidents
    'incidents' => [
        'title'                    => 'الأعطال و الصيانة',
        'incidents'                => 'الأعطال',
        'logged'                   => '{0} There are no incidents, good work.|You have logged one incident.|You have reported <strong>:count</strong> incidents.',
        'incident-create-template' => 'إنشاء قالب',
        'incident-templates'       => 'قوالب الأعطال',
        'updates'                  => [
            'title'   => 'تحديثات حالة العَطَل :incident',
            'count'   => '{0} Zero Updates|[1] One Update|[2] Two Updates|[3,*] Several Updates',
            'add'     => [
                'title'   => 'إنشاء تحديث حالة جديد للعَطَل',
                'success' => 'تم إنشاء الحالة الجديدة المتعلقة بالعَطَل.',
                'failure' => 'طرأ هناك خطأ في تحديث حالة العَطل.',
            ],
            'edit' => [
                'title'   => 'تعديل تحديث العَطل',
                'success' => 'تم إنشاء تحديث للحالة المتعلقة بالعَطَل.',
                'failure' => 'طرأ هناك خطأ في تحديث حالة العَطل',
            ],
        ],
        'add'                      => [
            'title'   => 'الإبلاغ عن عَطَل',
            'success' => 'تم إضافة العَطَل.',
            'failure' => 'حدث خلل أثناء إضافة العَطَل، الرجاء إعادة المحاولة ثانية.',
        ],
        'edit' => [
            'title'   => 'تعديل عَطَل',
            'success' => 'تم تحديث حالة العَطَل.',
            'failure' => 'حدث خلل أثناء تعديل حالة العَطَل، الرجاء إعادة المحاولة.',
        ],
        'delete' => [
            'success' => 'تم حذف العَطَل و لن تظهر في صفحة الحالة الخاصة بك.',
            'failure' => 'تعذرت عملية حذف العَطَل، يُرجى إعادة المحاولة ثانية.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'قوالب الأعطال',
            'add'   => [
                'title'   => 'إنشاء قالب حالة عَطَل',
                'message' => 'You should add an incident template.',
                'success' => 'Your new incident template has been created.',
                'failure' => 'Something went wrong with the incident template.',
            ],
            'edit' => [
                'title'   => 'تغيير النموذج',
                'success' => 'The incident template has been updated.',
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
        'schedule'     => 'صيانة',
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Scheduled at :timestamp',
        'add'          => [
            'title'   => 'إضافة إجراء صيانة',
            'success' => 'تم إضافة إجراء الصيانة.',
            'failure' => 'طرأ هناك خلل أثناء القيام بإضافة صيانة، يُرجى إعادة المحاولة.',
        ],
        'edit' => [
            'title'   => 'تعديل إجراء الصيانة المُبرمَجة',
            'success' => 'تم تحديث الصيانة !',
            'failure' => 'Something went wrong editing the schedule, please try again.',
        ],
        'delete' => [
            'success' => 'The scheduled maintenance has been deleted and will not show on your status page.',
            'failure' => 'The scheduled maintenance could not be deleted, please try again.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Components',
        'component_statuses' => 'Component Statuses',
        'listed_group'       => 'Grouped under :name',
        'add'                => [
            'title'   => 'Add a component',
            'message' => 'You should add a component.',
            'success' => 'Component created.',
            'failure' => 'Something went wrong with the component group, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit a component',
            'success' => 'Component updated.',
            'failure' => 'Something went wrong with the component group, please try again.',
        ],
        'delete' => [
            'success' => 'The component has been deleted!',
            'failure' => 'The component could not be deleted, please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Component group|Component groups',
            'no_components' => 'You should add a component group.',
            'add'           => [
                'title'   => 'Add a component group',
                'success' => 'Component group added.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'edit' => [
                'title'   => 'Edit a component group',
                'success' => 'Component group updated.',
                'failure' => 'Something went wrong with the component group, please try again.',
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
        'subscribers'          => 'المشتركين',
        'description'          => 'Subscribers will receive email updates when incidents are created or components are updated.',
        'description_disabled' => 'To use this feature, you need allow people to signup for notifications.',
        'verified'             => 'تم التحقق منه',
        'not_verified'         => 'Not verified',
        'subscriber'           => ':email, subscribed :date',
        'no_subscriptions'     => 'Subscribed to all updates',
        'global'               => 'Globally subscribed',
        'add'                  => [
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
        'team'        => 'فريق',
        'member'      => 'عضو',
        'profile'     => 'الملف الشخصي',
        'description' => 'Team Members will be able to add, modify & edit components and incidents.',
        'add'         => [
            'title'   => 'Add a new team member',
            'success' => 'Team member added.',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'edit' => [
            'title'   => 'تحديث الملف الشخصي',
            'success' => 'تم تحديث الملف الشخصي.',
            'failure' => 'Something went wrong updating the profile, please try again.',
        ],
        'delete' => [
            'success' => 'Team member has been deleted and will no longer have access to the dashboard!',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'invite' => [
            'title'   => 'Invite a new team member',
            'success' => 'An invite has been sent',
            'failure' => 'The invite could not be sent, please try again.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'الإعدادات',
        'app-setup' => [
            'app-setup'   => 'إعدادات البرنامج',
            'images-only' => 'لا يمكن تحميل إلّا الصور.',
            'too-big'     => 'The file you uploaded is too big. Upload an image smaller than :size',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'log' => [
            'log' => 'السجل',
        ],
        'localization' => [
            'localization' => 'الترجمة',
        ],
        'customization' => [
            'customization' => 'Customization',
            'header'        => 'Custom Header HTML',
            'footer'        => 'Custom Footer HTML',
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
            'security'   => 'Security',
            'two-factor' => 'Users without two-factor authentication',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stylesheet',
        ],
        'theme' => [
            'theme' => 'السمة',
        ],
        'edit' => [
            'success' => 'تم حفظ الإعدادات.',
            'failure' => 'تعذرت عملية حفظ الإعدادات.',
        ],
        'credits' => [
            'credits'       => 'Credits',
            'contributors'  => 'Contributors',
            'license'       => 'Cachet is a BSD-3-licensed open source project, released by <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Backers & Sponsors',
            'backers'       => 'If you\'d like to support future development, check out the <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a> campaign.',
            'thank-you'     => 'Thank you to each and every one of the :count contributors.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'تسجيل الدخول',
        'logged_in'  => 'You\'re logged in.',
        'welcome'    => 'Welcome back!',
        'two-factor' => 'Please enter your token.',
    ],

    // Sidebar footer
    'help'        => 'المساعدة',
    'status_page' => 'Status Page',
    'logout'      => 'الخروج',

    // Notifications
    'notifications' => [
        'notifications' => 'الإشعارات',
        'awesome'       => 'رائع.',
        'whoops'        => 'المعذرة.',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'Support Cachet',
        'support_subtitle' => 'Check out our <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong> page!',
        'news'             => 'آخر الأخبار',
        'news_subtitle'    => 'الحصول على آخر تحديث',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your new status page, :username!',
        'message' => 'You\'re almost ready but you might want to configure these extra settings first...',
        'close'   => 'I\'m good thanks!',
        'steps'   => [
            'component'  => 'Add your components',
            'incident'   => 'Create an incident',
            'customize'  => 'Customize your page',
            'team'       => 'Add your team',
            'api'        => 'Generate an API token',
            'two-factor' => 'Setup Two Factor Authentication',
        ],
    ],

];
