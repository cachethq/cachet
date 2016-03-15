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
            'success' => 'Инцидент добавлен.',
            'failure' => 'Что-то пошло не так при добавлении инцидента.',
        ],
        'edit' => [
            'title'   => 'Edit an incident',
            'success' => 'Инцидент обновлен.',
            'failure' => 'Что-то пошло не так при изменении инцидента.',
        ],
        'delete' => [
            'success' => 'The incident has been deleted and will not show on your status page.',
            'failure' => 'The incident could not be deleted. Please try again.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Шаблоны инцидентов',
            'add'   => [
                'title'   => 'Create an incident template',
                'message' => 'You should add an incident template.',
                'success' => 'Шаблон создан.',
                'failure' => 'Что-то пошло не так при создании шаблона.',
            ],
            'edit' => [
                'title'   => 'Edit Template',
                'success' => 'Шаблон был обновлен!',
                'failure' => 'Что-то пошло не так при изменении шаблона',
            ],
            'delete' => [
                'success' => 'The incident template has been deleted.',
                'failure' => 'The incident template could not be deleted. Please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Плановое техническое обслуживание',
        'logged'       => '{0} Ни одного планового обслуживания не зарегистрировано.|У вас зарегистрировано <strong>:count</strong> плановое обслуживание.|У вас зарегистрировано <strong>:count</strong> плановых обслуживания.|У вас зарегистрировано <strong>:count</strong> плановых обслуживаний.',
        'scheduled_at' => 'запланировано на :timestamp',
        'add'          => [
            'title'   => 'Добавить плановое техническое обслуживание',
            'success' => 'Плановые работы добавлены.',
            'failure' => 'Что-то пошло не так при добавлении плановых работ.',
        ],
        'edit' => [
            'title'   => 'Изменить плановое техническое обслуживание',
            'success' => 'Плановые работы обновлены!',
            'failure' => 'Что-то пошло не так при изменении плановых работ.',
        ],
        'delete' => [
            'success' => 'Плановые работы удалены и не будут отображаться на вашей статусной странице.',
            'failure' => 'Не удается удалить плановые работы. Попробуйте еще раз.',
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
            'success' => 'Компонент создан.',
            'failure' => 'Что-то пошло не так с компонентом.',
        ],
        'edit' => [
            'title'   => 'Edit a component',
            'success' => 'Обновление компонента.',
            'failure' => 'Что-то пошло не так с компонентом.',
        ],
        'delete' => [
            'success' => 'The component has been deleted!',
            'failure' => 'The component could not be deleted. Please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Группа компонентов|Группы компонентов',
            'no_components' => 'Вам следует добавить группу компонентов.',
            'add'           => [
                'title'   => 'Add a component group',
                'success' => 'Группа компонентов добавлена.',
                'failure' => 'Что-то пошло не так при создании группы компонентов.',
            ],
            'edit' => [
                'title'   => 'Edit a component group',
                'success' => 'Группа компонентов обновлена.',
                'failure' => 'Что-то пошло не так при изменении группы компонентов.',
            ],
            'delete' => [
                'success' => 'Component group has been deleted!',
                'failure' => 'The component group could not be deleted. Please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Метрики',
        'add'     => [
            'title'   => 'Create a metric',
            'message' => 'You should add a metric.',
            'success' => 'Метрика создана.',
            'failure' => 'Что-то пошло не так при создании метрики.',
        ],
        'edit' => [
            'title'   => 'Edit a metric',
            'success' => 'Метрика обновлена.',
            'failure' => 'Что-то пошло не так при изменении метрики.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will no longer display on your status page.',
            'failure' => 'The metric could not be deleted. Please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Subscribers',
        'description'  => 'Subscribers will receive email updates when incidents are created.',
        'verified'     => 'Verified',
        'not_verified' => 'Not verified',
        'add'          => [
            'title'   => 'Add a new subscriber',
            'success' => 'Subscriber has been added!',
            'failure' => 'Что-то пошло не так с компонентом.',
        ],
        'edit' => [
            'title'   => 'Update subscriber',
            'success' => 'Subscriber has been updated!',
            'failure' => 'Что-то пошло не так при изменении профиля.',
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
            'success' => 'Участник команды добавлен.',
            'failure' => 'The team member could not be added. Please try again.',
        ],
        'edit' => [
            'title'   => 'Update profile',
            'success' => 'Данные профиля обновлены.',
            'failure' => 'Что-то пошло не так при изменении профиля.',
        ],
        'delete' => [
            'success' => 'Team member has been deleted and will no longer have access to the dashboard!',
            'failure' => 'The team member could not be added. Please try again.',
        ],
        'invite' => [
            'title'   => 'Invite a new team member',
            'success' => 'An invite has been sent',
            'failure' => 'The invite could not be sent. Please try again.',
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
        'close'   => 'Я хочу сразу перейти в панель управления',
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
