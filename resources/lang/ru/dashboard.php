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

    'dashboard' => 'Панель управления',

    // Incidents
    'incidents' => [
        'title'                    => 'Инциденты и Плановые работы',
        'incidents'                => 'Инциденты',
        'logged'                   => '{0} Нет инцидентов, отличная работа!|У вас зарегистрирован <strong>:count</strong> инцидент.|У вас зарегистрировано <strong>:count</strong> инцидента.|У вас зарегистрировано <strong>:count</strong> инцидентов.',
        'incident-create-template' => 'Создать шаблон',
        'incident-templates'       => 'Шаблоны инцидентов',
        'add'                      => [
            'title'   => 'Report an incident',
            'success' => 'Incident added.',
            'failure' => 'There was an error adding the incident, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit an incident',
            'success' => 'Инцидент обновлен.',
            'failure' => 'There was an error editing the incident, please try again.',
        ],
        'delete' => [
            'success' => 'The incident has been deleted and will not show on your status page.',
            'failure' => 'The incident could not be deleted, please try again.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Шаблоны инцидентов',
            'add'   => [
                'title'   => 'Create an incident template',
                'message' => 'You should add an incident template.',
                'success' => 'Your new incident template has been created.',
                'failure' => 'Something went wrong with the incident template.',
            ],
            'edit' => [
                'title'   => 'Edit Template',
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
        'schedule'     => 'Плановое техническое обслуживание',
        'logged'       => '{0} Ни одного планового обслуживания не зарегистрировано.|У вас зарегистрировано <strong>:count</strong> плановое обслуживание.|У вас зарегистрировано <strong>:count</strong> плановых обслуживания.|У вас зарегистрировано <strong>:count</strong> плановых обслуживаний.',
        'scheduled_at' => 'запланировано на :timestamp',
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
        'components'         => 'Компоненты',
        'component_statuses' => ' Статусы компонентов',
        'listed_group'       => 'Сгруппированные по :name',
        'add'                => [
            'title'   => 'Add a component',
            'message' => 'Вам следует добавить компонент.',
            'success' => 'Component created.',
            'failure' => 'Something went wrong with the component, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit a component',
            'success' => 'Component updated.',
            'failure' => 'Something went wrong with the component, please try again.',
        ],
        'delete' => [
            'success' => 'The component has been deleted!',
            'failure' => 'The component could not be deleted, please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Группа компонентов|Группы компонентов',
            'no_components' => 'Вам следует добавить группу компонентов.',
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
        'metrics' => 'Метрики',
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
        ],
        'edit' => [
            'title'   => 'Update subscriber',
            'success' => 'Subscriber has been updated!',
            'failure' => 'Something went wrong editing the subscriber, please try again.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Команда',
        'member'      => 'Участник',
        'profile'     => 'Профиль',
        'description' => 'Участники команды смогут добавлять и изменять компоненты и инциденты.',
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
        'settings'  => 'Настройки',
        'app-setup' => [
            'app-setup'   => 'Настройки приложения',
            'images-only' => 'Могут быть загружены только изображения.',
            'too-big'     => 'Загруженный вами файл слишком большой. Загрузите картинку меньше чем :size',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'localization' => [
            'localization' => 'Localization',
        ],
        'customization' => [
            'customization' => 'Customization',
            'header'        => 'Custom Header HTML',
            'footer'        => 'Custom Footer HTML',
        ],
        'security' => [
            'security'   => 'Безопасность',
            'two-factor' => 'Пользователи без двухфакторной аутентификации',
        ],
        'stylesheet' => [
            'stylesheet' => 'Таблица стилей',
        ],
        'theme' => [
            'theme' => 'Тема',
        ],
        'edit' => [
            'success' => 'Настройки сохранены.',
            'failure' => 'Не удается сохранить настройки.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Войти',
        'logged_in'  => 'Вы вошли в систему.',
        'welcome'    => 'С возвращением!',
        'two-factor' => 'Пожалуйста, введите ваш токен.',
    ],

    // Sidebar footer
    'help'        => 'Помощь',
    'status_page' => 'Страница статуса',
    'logout'      => 'Выйти',

    // Notifications
    'notifications' => [
        'notifications' => 'Уведомления',
        'awesome'       => 'Отлично.',
        'whoops'        => 'Ой-ой!',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your status page!',
        'message' => 'Ваша статусная страница почти готова! Возможно, вы захотите настроить дополнительные параметры',
        'close'   => 'Take me straight to my dashboard',
        'steps'   => [
            'component'  => 'Создание компонентов',
            'incident'   => 'Создание инцидентов',
            'customize'  => 'Настройка',
            'team'       => 'Добавление пользователей',
            'api'        => 'Сгенерировать API токен',
            'two-factor' => 'Двухфакторная аутентификация',
        ],
    ],

];
