<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    // Setup form fields
    'setup' => [
        'email'            => 'Email',
        'username'         => 'Имя пользователя',
        'password'         => 'Пароль',
        'site_name'        => 'Название сайта',
        'site_domain'      => 'Домен',
        'site_timezone'    => 'Выберите временную зону',
        'site_locale'      => 'Выберите язык',
        'enable_google2fa' => 'Включить двухфакторную авторизацию через Google',
        'cache_driver'     => 'Cache Driver',
        'session_driver'   => 'Session Driver',
    ],

    // Login form fields
    'login' => [
        'email'         => 'Email',
        'password'      => 'Пароль',
        '2fauth'        => 'Код аутентификации',
        'invalid'       => 'Неправильный email или пароль',
        'invalid-token' => 'Неправильный токен',
        'cookies'       => 'Необходимо включить cookies для входа.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Название',
        'status'             => 'Статус',
        'component'          => 'Компонент',
        'message'            => 'Сообщение',
        'message-help'       => 'Вы можете использовать Markdown.',
        'scheduled_at'       => 'Когда запланированы работы?',
        'incident_time'      => 'Когда инцидент произошел?',
        'notify_subscribers' => 'Уведомить подписчиков',
        'visibility'         => 'Видимость Инцидента',
        'public'             => 'Доступен публично',
        'logged_in_only'     => 'Видимый только авторизованным пользователям',
        'templates'          => [
            'name'     => 'Название',
            'template' => 'Шаблон',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Название',
        'status'      => 'Статус',
        'group'       => 'Группа',
        'description' => 'Описание',
        'link'        => 'Ссылка',
        'tags'        => 'Теги',
        'tags-help'   => 'Разделитель - запятые.',

        'groups' => [
            'name' => 'Название',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Название',
        'suffix'           => 'Суффикс',
        'description'      => 'Описание',
        'description-help' => 'Вы можете использовать Markdown.',
        'display-chart'    => 'Отображать график на статусной странице?',
        'default-value'    => 'Значение по-умолчанию',
        'calc_type'        => 'Расчет метрики',
        'type_sum'         => 'Сумма',
        'type_avg'         => 'Среднее значение',

        'points' => [
            'value' => 'Значение',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Название сайта',
            'site-url'               => 'URL сайта',
            'site-timezone'          => 'Временная зона',
            'site-locale'            => 'Язык',
            'date-format'            => 'Формат даты',
            'incident-date-format'   => 'Формат даты и времени инцидента',
            'display-graphs'         => 'Отображать графики на статусной странице?',
            'about-this-page'        => 'Об этой странице',
            'days-of-incidents'      => 'Сколько дней показывать инциденты?',
            'banner'                 => 'Картинка-баннер',
            'banner-help'            => "Рекомендуется загружать картинки не больше 930 пикс. в ширину.",
            'analytics_google'       => 'Код Google Analytics',
            'analytics_gosquared'    => 'Код GoSquared Analytics',
            'analytics_piwik_url'    => 'URL установки Piwik (без http(s)://)',
            'analytics_piwik_siteid' => 'Идентификатор сайта в Piwik',
            'subscribers'            => 'Разрешить посетителям подписываться на email-уведомления?',
        ],
        'security' => [
            'allowed-domains'      => 'Разрешенные домены',
            'allowed-domains-help' => 'Разделитель - запятые. Домен, установленный в настройках разрешен по-умолчанию.',
        ],
        'stylesheet' => [
            'custom-css' => 'Собственная css-таблица',
        ],
        'theme' => [
            'background-color' => 'Цвет фона',
            'text-color'       => 'Цвет текста',
        ],
    ],

    'user' => [
        'username'       => 'Имя пользователя',
        'email'          => 'Email',
        'password'       => 'Пароль',
        'api-token'      => 'API токен',
        'api-token-help' => 'Регенерирование API токена заблокирует существующим приложениям доступ в Cachet. Вам будет необходимо прописать в них новый токен.',
        '2fa'            => [
            'help' => 'Включение двухфакторной аутентификации увеличивает безопасность вашей учетной записи. Вам понадобится скачать <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> или аналогичное приложение на свой смартфон. Когда в следующий раз вы войдете в панель управления, вам понадобится токен, выданный этим приложением.',
        ],
    ],

    // Buttons
    'add'    => 'Добавить',
    'save'   => 'Сохранить',
    'update' => 'Обновить',
    'create' => 'Создать',
    'edit'   => 'Правка',
    'delete' => 'Удалить',
    'submit' => 'Сохранить',
    'cancel' => 'Отмена',
    'remove' => 'Удалить',

    // Other
    'optional' => '* не обязательное',
];
