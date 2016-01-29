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
        'logged'                   => '{0} Нет инцидентов, отличная работа!|У вас записан один инцидент.|Записано инцидентов: <strong>:count</strong>.',
        'incident-create-template' => 'Создать шаблон',
        'incident-templates'       => 'Шаблоны инцидентов',
        'add'                      => [
            'title'   => 'Add an Incident',
            'success' => 'Инцидент добавлен.',
            'failure' => 'Что-то пошло не так при добавлении инцидента.',
        ],
        'edit' => [
            'title'   => 'Edit an Incident',
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
                'title'   => 'Create an Incident Template',
                'message' => 'You should add an Incident Template.',
                'success' => 'Шаблон создан.',
                'failure' => 'Что-то пошло не так при создании шаблона.',
            ],
            'edit' => [
                'title'   => 'Edit Template',
                'success' => 'Шаблон был обновлен!',
                'failure' => 'Что-то пошло не так при изменении шаблона',
            ],
            'delete' => [
                'success' => 'The tmplate has been deleted.',
                'failure' => 'The template could not be deleted. Please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Плановое техническое обслуживание',
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
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
            'title'   => 'Add a Component',
            'message' => 'Вам следует добавить компонент.',
            'success' => 'Компонент создан.',
            'failure' => 'Что-то пошло не так с компонентом.',
        ],
        'edit' => [
            'title'   => 'Edit a Component',
            'success' => 'Обновление компонента.',
            'failure' => 'Что-то пошло не так с компонентом.',
        ],
        'delete' => [
            'success' => 'Component deleted.',
            'failure' => 'The Component could not be deleted. Please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Группа компонентов|Группы компонентов',
            'no_components' => 'Вам следует добавить группу компонентов.',
            'add'           => [
                'title'   => 'Add a Component Group',
                'success' => 'Группа компонентов добавлена.',
                'failure' => 'Что-то пошло не так при создании группы компонентов.',
            ],
            'edit' => [
                'title'   => 'Edit a Component Group',
                'success' => 'Группа компонентов обновлена.',
                'failure' => 'Что-то пошло не так при изменении группы компонентов.',
            ],
            'delete' => [
                'success' => 'Component Group deleted.',
                'failure' => 'The Component Group could not be deleted. Please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Метрики',
        'add'     => [
            'title'   => 'Create a Metric',
            'message' => 'You should add a Metric.',
            'success' => 'Метрика создана.',
            'failure' => 'Что-то пошло не так при создании метрики.',
        ],
        'edit' => [
            'title'   => 'Edit a Metric',
            'success' => 'Метрика обновлена.',
            'failure' => 'Что-то пошло не так при изменении метрики.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will not show on your status page.',
            'failure' => 'The metric could not be deleted. Please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Subscribers',
        'description'  => 'Subscribers will receive email updates when incidents are created.',
        'verified'     => 'Verified',
        'not_verified' => 'Not Verified',
        'add'          => [
            'title'   => 'Add a New Subscriber',
            'success' => 'Subscriber added.',
            'failure' => 'Что-то пошло не так с компонентом.',
        ],
        'edit' => [
            'title'   => 'Update Subscriber',
            'success' => 'Subscriber updated.',
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
            'title'   => 'Add a New Team Member',
            'success' => 'Участник команды добавлен.',
            'failure' => 'Something went wrong with the user.',
        ],
        'edit' => [
            'title'   => 'Update Profile',
            'success' => 'Данные профиля обновлены.',
            'failure' => 'Что-то пошло не так при изменении профиля.',
        ],
        'delete' => [
            'success' => 'User deleted.',
            'failure' => 'Something went wrong when deleting this user.',
        ],
        'invite' => [
            'title'   => 'Invite a New Team Member',
            'success' => 'The users invited.',
            'failure' => 'Something went wrong with the invite.',
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
