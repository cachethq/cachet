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

    'dashboard'          => 'Панель управління',
    'writeable_settings' => 'The Cachet settings directory is not writeable. Please make sure that <code>./bootstrap/cachet</code> is writeable by the web server.',

    // Incidents
    'incidents' => [
        'title'                    => 'Інциденти & розклад',
        'incidents'                => 'Інциденти',
        'logged'                   => '{0} There are no incidents, good work.|You have logged one incident.|You have reported <strong>:count</strong> incidents.',
        'incident-create-template' => 'Створити шаблон',
        'incident-templates'       => 'Шаблони Інцидентів',
        'updates'                  => [
            'title'   => 'Incident updates for :incident',
            'count'   => '{0} Zero Updates|[1] One Update|[2] Two Updates|[3,*] Several Updates',
            'add'     => [
                'title'   => 'Створити нове оновлення інциденту',
                'success' => 'Your new incident update has been created.',
                'failure' => 'Something went wrong with the incident update.',
            ],
            'edit' => [
                'title'   => 'Edit incident update',
                'success' => 'The incident update has been updated.',
                'failure' => 'Something went wrong updating the incident update',
            ],
        ],
        'add'                      => [
            'title'   => 'Повідомити про інцидент',
            'success' => 'Інцидент додано.',
            'failure' => 'Виникла помилка при додаваннi інциденту, будь ласка, спробуйте ще раз.',
        ],
        'edit' => [
            'title'   => 'Редагувати інцидент',
            'success' => 'Інцидент оновлено.',
            'failure' => 'Виникла помилка при редагуваннi інциденту, будь ласка, спробуйте ще раз.',
        ],
        'delete' => [
            'success' => 'Цей інцидент був знищений і не буде з\'являтися на сторінці Вашого статусу.',
            'failure' => 'Інцидент не може бути видалений, будь ласка, спробуйте ще раз.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Шаблони Інцидентів',
            'add'   => [
                'title'   => 'Створити інцидент-шаблон',
                'message' => 'Ви повинні додати шаблон інциденту.',
                'success' => 'Ваш новий шаблон інциденту створено.',
                'failure' => 'Щось пішло не так з процесом оновлення iнцiдент-шаблону.',
            ],
            'edit' => [
                'title'   => 'Редагувати шаблон',
                'success' => 'Шаблон iнциденту оновлений.',
                'failure' => 'Виникла помилка при оновленнi шаблону iнциденту',
            ],
            'delete' => [
                'success' => 'Шаблон iнциденту видалено.',
                'failure' => 'Інцидент-шаблон не може бути видалений, будь ласка, спробуйте ще раз.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Запланована перерва у роботі',
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Scheduled at :timestamp',
        'add'          => [
            'title'   => 'Add Scheduled Maintenance',
            'success' => 'Schedule added.',
            'failure' => 'Something went wrong adding the schedule, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit Scheduled Maintenance',
            'success' => 'Schedule has been updated!',
            'failure' => 'Something went wrong editing the schedule, please try again.',
        ],
        'delete' => [
            'success' => 'The scheduled maintenance has been deleted and will not show on your status page.',
            'failure' => 'The scheduled maintenance could not be deleted, please try again.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Компоненти',
        'component_statuses' => 'Компонент статуси',
        'listed_group'       => 'Згруповані під: Назва',
        'add'                => [
            'title'   => 'Додати компонент',
            'message' => 'Ви повинні додати компонент.',
            'success' => 'Компонент створено.',
            'failure' => 'Something went wrong with the component group, please try again.',
        ],
        'edit' => [
            'title'   => 'Редагувати компонент',
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
                'title'   => 'Редагування компонент групи',
                'success' => 'Группа компонентiв була оновлена.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'delete' => [
                'success' => 'Група компонентів була видалена!',
                'failure' => 'Группа компонентiв не може бути видалена, будь ласка, спробуйте ще раз.',
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
        'subscribers'          => 'Підписники',
        'description'          => 'Пiдписники отримуватимуть оновленя по електронній пошті, завжди коли інциденти або компоненти створюватимуся та оновлюватимуся.',
        'description_disabled' => 'To use this feature, you need allow people to signup for notifications.',
        'verified'             => 'Підтверджено',
        'not_verified'         => 'Не підтверджено',
        'subscriber'           => ': лист, підписаний: Дата',
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
        'settings'  => 'Параметри',
        'app-setup' => [
            'app-setup'   => 'Налашування додатку',
            'images-only' => 'Лише зображення можуть бути завантажені.',
            'too-big'     => 'Завантажений файл завеликий. Завантажте зображення менше за: розмір',
        ],
        'analytics' => [
            'analytics' => 'Аналітика',
        ],
        'log' => [
            'log' => 'Звіт',
        ],
        'localization' => [
            'localization' => 'Регіональні налаштування',
        ],
        'customization' => [
            'customization' => 'Налаштування',
            'header'        => 'Користувальницький заголовок HTML',
            'footer'        => 'Custom Footer HTML',
        ],
        'mail' => [
            'mail'  => 'Пошта',
            'test'  => 'Перевірка',
            'email' => [
                'subject' => 'Тестове повідомлення від Cachet',
                'body'    => 'Це тестове повідомлення від Cachet.',
            ],
        ],
        'security' => [
            'security'   => 'Безпека',
            'two-factor' => 'Користувачi без двофакторної аутентифікації',
        ],
        'stylesheet' => [
            'stylesheet' => 'Стилі',
        ],
        'theme' => [
            'theme' => 'Тема',
        ],
        'edit' => [
            'success' => 'Параметри збережено.',
            'failure' => 'Налаштування не можуть бути збережені.',
        ],
        'credits' => [
            'credits'       => 'Credits',
            'contributors'  => 'Контриб’ютори',
            'license'       => 'Cachet is a BSD-3-licensed open source project, released by <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Помiчники i спонсори',
            'backers'       => 'Якщо б Ви хотіли підтримати майбутнiй розвиток, погляньте на <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a> кампанії.',
            'thank-you'     => 'Дякуемо кожному з : розраховувати вкладників.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Вхід',
        'logged_in'  => 'Ви ввійшли в систему.',
        'welcome'    => 'З поверненням!',
        'two-factor' => 'Будь ласка, введіть своє ім\'я.',
    ],

    // Sidebar footer
    'help'        => 'Допомога',
    'status_page' => 'Сторінка повідомлень',
    'logout'      => 'Вийти',

    // Notifications
    'notifications' => [
        'notifications' => 'Повідомлення',
        'awesome'       => 'Чудово.',
        'whoops'        => 'Йой.',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'Підтримка Cachet',
        'support_subtitle' => 'Перевірте наші сторінки <strong><a href="https://patreon.com/jbrooksuk" target="_blank"> Patreon</a></strong>!',
        'news'             => 'Останні новини',
        'news_subtitle'    => 'Отримати останні оновлення',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Ласкаво просимо на твою нову сторінку, : ім\'я користувача!',
        'message' => 'You\'re almost ready but you might want to configure these extra settings first...',
        'close'   => 'Добре, дякую!',
        'steps'   => [
            'component'  => 'Додати Вашi компоненти',
            'incident'   => 'Створити інцидент',
            'customize'  => 'Налаштуйте свою сторінку',
            'team'       => 'Додати свою команду',
            'api'        => 'Generate an API token',
            'two-factor' => 'Setup Two Factor Authentication',
        ],
    ],

];
