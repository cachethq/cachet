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
    // Components
    'components' => [
        'last_updated' => 'Последнее обновление :timestamp',
        'status'       => [
            0 => 'Неизвестный',
            1 => 'Работает',
            2 => 'Падение производительности',
            3 => 'Перебои в работе',
            4 => 'Значительные неполадки',
        ],
        'group' => [
            'other' => 'Другие компоненты',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Без происшествий',
        'past'         => 'Последние инциденты',
        'stickied'     => 'Stickied инциденты',
        'scheduled'    => 'Плановые работы',
        'scheduled_at' => ', запланированы :timestamp',
        'posted'       => 'Отправлено :timestamp',
        'status'       => [
            1 => 'Проводим анализ проблемы',
            2 => 'Причина определена',
            3 => 'Под наблюдением',
            4 => 'Исправлено',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Будущие',
            1 => 'Выполняется',
            2 => 'Завершено',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Система работает исправно|[2,Inf] Все системы работают исправно',
        'bad'   => '[0,1] В системе есть неполадки|[2,Inf] В некоторых системах есть неполадки',
        'major' => '[0,1] Система не работает|[2,Inf] Некоторые системы не работают',
    ],

    'api' => [
        'regenerate' => 'Сгенерировать ключ API заново',
        'revoke'     => 'Отозвать ключ API',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Последний час',
            'hourly'    => 'Последние 12 часов',
            'weekly'    => 'Неделя',
            'monthly'   => 'Месяц',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'   => 'Подпишитесь, чтобы получать информацию об изменениях',
        'unsubscribe' => 'Отписаться от :link',
        'button'      => 'Подписаться',
        'manage'      => [
            'no_subscriptions' => 'Вы подписаны на все изменения.',
            'my_subscriptions' => 'Вы подписаны на следующие изменения.',
        ],
        'email' => [
            'subscribe'          => 'Подписка на рассылку об изменениях.',
            'subscribed'         => 'Вы подписались на рассылку email уведомлений. Проверьте вашу почту, чтобы подтвердить подписку.',
            'verified'           => 'Ваша подписка подтверждена. Спасибо!',
            'manage'             => 'Управление подпиской',
            'unsubscribe'        => 'Отписаться от рассылки.',
            'unsubscribed'       => 'Ваша подписка отменена.',
            'failure'            => 'Произошла ошибка при подписке на рассылку.',
            'already-subscribed' => 'Невозможно оформить подписку на :email, т.к. на него уже оформлена подписка.',
        ],
    ],

    'signup' => [
        'title'    => 'Зарегистрироваться',
        'username' => 'Имя пользователя',
        'email'    => 'Email',
        'password' => 'Пароль',
        'success'  => 'Ваша учетная запись создана.',
        'failure'  => 'Что-то пошло не так при регистрации.',
    ],

    'system' => [
        'update' => 'Доступна новая версия Cachet. Инструкции по обновлению можно получить <a href="https://docs.cachethq.io/docs/updating-cachet">здесь</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Закрыть',
        'subscribe' => [
            'title'  => 'Подписка на изменения статуса компонента',
            'body'   => 'Введите ваш email, чтобы подписаться на изменения статуса этого компонента. Если вы уже подписаны на обновления, значит сообщения об этом компоненте вам должны приходить.',
            'button' => 'Подписаться',
        ],
    ],

    // Other
    'home'            => 'Главный экран',
    'description'     => 'Будьте в курсе последних новостей о состоянии сервиса от :app.',
    'powered_by'      => 'Работает на <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Время указано в :timezone.',
    'about_this_site' => 'Об этом сайте',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Статусная лента',

];