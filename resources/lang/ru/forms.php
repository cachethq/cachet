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
        'email'            => 'Эл. почта',
        'username'         => 'Имя пользователя',
        'password'         => 'Пароль',
        'site_name'        => 'Название сайта',
        'site_domain'      => 'Домен сайта',
        'site_timezone'    => 'Выберите ваш часовой пояс',
        'site_locale'      => 'Выберите ваш язык',
        'enable_google2fa' => 'Включить двухфакторную аутентификацию через Google',
        'cache_driver'     => 'Драйвер кеша',
        'session_driver'   => 'Драйвер сессий',
    ],

    // Login form fields
    'login' => [
        'email'         => 'Эл. почта',
        'password'      => 'Пароль',
        '2fauth'        => 'Код аутентификации',
        'invalid'       => 'Неправильный адрес эл. почты или пароль',
        'invalid-token' => 'Неправильный токен',
        'cookies'       => 'Необходимо включить куки для входа.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Название',
        'status'             => 'Статус',
        'component'          => 'Компонент',
        'message'            => 'Сообщение',
        'message-help'       => 'Вы также можете использовать Markdown.',
        'scheduled_at'       => 'Когда запланированы работы?',
        'incident_time'      => 'Когда инцидент произошел?',
        'notify_subscribers' => 'Уведомить подписчиков',
        'visibility'         => 'Видимость инцидента',
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
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name' => 'Название',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Название',
        'suffix'           => 'Суффикс',
        'description'      => 'Описание',
        'description-help' => 'Вы также можете использовать Markdown.',
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
            'display-graphs'         => 'Отображать графики на статусной странице?',
            'about-this-page'        => 'Об этой странице',
            'days-of-incidents'      => 'Сколько дней показывать инциденты?',
            'banner'                 => 'Картинка-баннер',
            'banner-help'            => 'Рекомендуется загружать картинки не больше 930 пикс. в ширину.',
            'subscribers'            => 'Разрешить посетителям подписываться на email-уведомления?',
        ],
        'analytics' => [
            'analytics_google'       => 'Код Google Analytics',
            'analytics_gosquared'    => 'Код GoSquared Analytics',
            'analytics_piwik_url'    => 'URL установки Piwik (без http(s)://)',
            'analytics_piwik_siteid' => 'Идентификатор сайта в Piwik',
        ],
        'localization' => [
            'site-timezone'          => 'Часовой пояс сайта',
            'site-locale'            => 'Язык сайта',
            'date-format'            => 'Формат даты',
            'incident-date-format'   => 'Формат даты и времени инцидента',
        ],
        'security' => [
            'allowed-domains'      => 'Разрешенные домены',
            'allowed-domains-help' => 'Разделитель - запятые. Домен, установленный в настройках разрешен по-умолчанию.',
        ],
        'stylesheet' => [
            'custom-css' => 'Пользовательские таблицы стилей',
        ],
        'theme' => [
            'background-color'        => 'Цвет фона',
            'text-color'              => 'Цвет текста',
            'dashboard-login'         => 'Показывать кнопку панели управления внизу страницы?',
            'banner-background-color' => 'Фоновый цвет баннера',
            'banner-padding'          => 'Поля вокруг баннера',
            'fullwidth-banner'        => 'Включить баннер в полную ширину?',
        ],
    ],

    'user' => [
        'username'       => 'Имя пользователя',
        'email'          => 'Эл. почта',
        'password'       => 'Пароль',
        'api-token'      => 'API токен',
        'api-token-help' => 'Обновление вашего API токена заблокирует существующим приложениям доступ в Cachet. Вам будет необходимо прописать в них новый токен.',
        'gravatar'       => 'Измените вашу картинку профиля в Gravatar.',
        '2fa'            => [
            'help' => 'Включение двухфакторной аутентификации увеличивает безопасность вашей учетной записи. Вам понадобится скачать <a href="https://support.google.com/accounts/answer/1066447?hl=ru">Google Authenticator</a> или аналогичное приложение на свой смартфон. Когда в следующий раз вы войдете в панель управления, вам понадобится токен, выданный этим приложением.',
        ],
    ],

    // Buttons
    'add'    => 'Добавить',
    'save'   => 'Сохранить',
    'update' => 'Обновить',
    'create' => 'Создать',
    'edit'   => 'Изменить',
    'delete' => 'Удалить',
    'submit' => 'Отправить',
    'cancel' => 'Отмена',
    'remove' => 'Удалить',

    // Other
    'optional' => '* не обязательное',
];
