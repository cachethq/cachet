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

    'dashboard'          => 'Kontrol paneli',
    'writeable_settings' => 'Cachet ayarlar dizini yazılabilir değil. Lütfen <code>./bootstrap/cachet</code> sunucu tarafından yazılabilir olduğundan emin olun.',

    // Incidents
    'incidents' => [
        'title'                    => 'Olaylar &amp; Zamanlama',
        'incidents'                => 'Olaylar',
        'logged'                   => '{0} Hiç olay yok, tebrikler. |Bir olay rapor ettiniz.|<strong>:count</strong> olay rapor ettiniz.',
        'incident-create-template' => 'Şablon Oluştur',
        'incident-templates'       => 'Olay Şablonları',
        'updates'                  => '{0} Sıfır Güncelleme | Bir Güncelleme |:count Güncelleme',
        'add'                      => [
            'title'   => 'Olay Ekle',
            'success' => 'Olay eklendi.',
            'failure' => 'Olay eklenirken bir hata oluştu, lütfen tekrar deneyin.',
        ],
        'edit' => [
            'title'   => 'Olay Düzenle',
            'success' => 'Olay güncellendi.',
            'failure' => 'Olay düzenlenirken bir hata oluştu, lütfen tekrar deneyin.',
        ],
        'delete' => [
            'success' => 'Olay silindi ve durum sayfanızda bir daha gösterilmeyecek.',
            'failure' => 'Olay silinemedi, lütfen tekrar deneyin.',
        ],
        'update' => [
            'title'    => 'Yeni olay güncellemesi oluştur',
            'subtitle' => '<strong>:incident</strong> için güncelleme ekkleyin',
            'success'  => 'Update added.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Olay Şablonları',
            'add'   => [
                'title'   => 'Olay Şablonu Oluştur',
                'message' => 'Bir olay şablonu eklemelisiniz.',
                'success' => 'Yeni olay şablonunuz oluşturuldu.',
                'failure' => 'Olay şablonu ile ilgili bir şeyler ters gitti.',
            ],
            'edit' => [
                'title'   => 'Şablonu Düzenle',
                'success' => 'Olay şablonu güncellendi.',
                'failure' => 'Olay şablonunu güncellerken bir şeyler ters gitti',
            ],
            'delete' => [
                'success' => 'Olay şablonu silindi.',
                'failure' => 'Olay şablonu silinemedi, lütfen tekrar deneyin.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Zamanlanmış bakım',
        'logged'       => '{0} Hiçbir olay yok, tebrikler. |Bir olayı raprladınız. | <strong>:count</strong> olayı raporladınız.',
        'scheduled_at' => ':timestamp zamanı için kaydedildi',
        'add'          => [
            'title'   => 'Zamanlanmış Bakım Ekle',
            'success' => 'Zamanlama eklendi.',
            'failure' => 'Zamanlama eklerken bir şeyler yanlış gitti, lütfen yeniden deneyin.',
        ],
        'edit' => [
            'title'   => 'Zamanlanmış Bakımı Düzenle',
            'success' => 'Zamanlama güncellendi!',
            'failure' => 'Zamanlama düzeltilirken bir şeyler ters gitti, lütfen tekrar deneyin.',
        ],
        'delete' => [
            'success' => 'Zamanlanmış bakım silindi ve durum sayfanızda bir daha gösterilmeyecek.',
            'failure' => 'Zamanlanmış bakım silinemez, lütfen tekrar deneyin.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Bileşenler',
        'component_statuses' => 'Bileşen Durumları',
        'listed_group'       => ':name altında toplandı',
        'add'                => [
            'title'   => 'Bileşen ekle',
            'message' => 'Bir bileşen eklemelisiniz.',
            'success' => 'Bileşen oluşturuldu.',
            'failure' => 'Bileşenlerle ilgili bir şeyler yanlış gitti, lütfen daha sonra tekrar deneyin.',
        ],
        'edit' => [
            'title'   => 'Bileşen düzenle',
            'success' => 'Component updated.',
            'failure' => 'Bileşenlerle ilgili bir şeyler yanlış gitti, lütfen daha sonra tekrar deneyin.',
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
                'failure' => 'Bileşenlerle ilgili bir şeyler yanlış gitti, lütfen daha sonra tekrar deneyin.',
            ],
            'edit' => [
                'title'   => 'Edit a component group',
                'success' => 'Component group updated.',
                'failure' => 'Bileşenlerle ilgili bir şeyler yanlış gitti, lütfen daha sonra tekrar deneyin.',
            ],
            'delete' => [
                'success' => 'Bileşen grubu silindi!',
                'failure' => 'Bileşen grubu silinemedi, lütfen tekrar deneyin.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metrik',
        'add'     => [
            'title'   => 'Bir ölçü oluştur',
            'message' => 'Bir ölçü eklemelisiniz.',
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
        'description' => 'Team Members will be able to add, modify & edit components and incidents.',
        'add'         => [
            'title'   => 'Add a new team member',
            'success' => 'Team member added.',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'edit' => [
            'title'   => 'Update profile',
            'success' => 'Profile updated.',
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
        'settings'  => 'Settings',
        'app-setup' => [
            'app-setup'   => 'Application Setup',
            'images-only' => 'Only images may be uploaded.',
            'too-big'     => 'The file you uploaded is too big. Upload an image smaller than :size',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'log' => [
            'log' => 'Log',
        ],
        'localization' => [
            'localization' => 'Localization',
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
            'theme' => 'Theme',
        ],
        'edit' => [
            'success' => 'Settings saved.',
            'failure' => 'Settings could not be saved.',
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
        'login'      => 'Login',
        'logged_in'  => 'You\'re logged in.',
        'welcome'    => 'Welcome back!',
        'two-factor' => 'Please enter your token.',
    ],

    // Sidebar footer
    'help'        => 'Help',
    'status_page' => 'Status Page',
    'logout'      => 'Logout',

    // Notifications
    'notifications' => [
        'notifications' => 'Notifications',
        'awesome'       => 'Awesome.',
        'whoops'        => 'Whoops.',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'Support Cachet',
        'support_subtitle' => 'Check out our <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong> page!',
        'news'             => 'Latest News',
        'news_subtitle'    => 'Get the latest update',
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
