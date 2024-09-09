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
            0 => 'Unknown',
            1 => 'Работает',
            2 => 'Падение производительности',
            3 => 'Перебои в работе',
            4 => 'Значительные неполадки',
        ],
        'group' => [
            'other' => 'Другие компоненты',
        ],
        'select_all'   => 'Select All',
        'deselect_all' => 'Deselect All',
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Без происшествий',
        'past'         => 'Последние инциденты',
        'stickied'     => 'Stickied Incidents',
        'scheduled'    => 'Maintenance',
        'scheduled_at' => ', запланированы :timestamp',
        'posted'       => 'Posted :timestamp by :username',
        'posted_at'    => 'Posted at :timestamp',
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
            0 => 'Upcoming',
            1 => 'In Progress',
            2 => 'Complete',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1]System operational|[2,*]All systems are operational',
        'bad'   => '[0,1]The system is experiencing issues|[2,*]Some systems are experiencing issues',
        'major' => '[0,1]The system is experiencing major issues|[2,*]Some systems are experiencing major issues',
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
        'subscribe'           => 'Subscribe to status changes and incident updates',
        'unsubscribe'         => 'Unsubscribe',
        'button'              => 'Подписаться',
        'manage_subscription' => 'Manage subscription',
        'manage'              => [
            'notifications'       => 'Уведомления',
            'notifications_for'   => 'Manage notifications for',
            'no_subscriptions'    => 'Вы подписаны на все изменения.',
            'update_subscription' => 'Update Subscription',
            'my_subscriptions'    => 'Вы подписаны на следующие изменения.',
            'manage_at_link'      => 'Manage your subscriptions at :link',
        ],
        'email' => [
            'manage_subscription' => 'We\'ve sent you an email, please click the link to manage your subscription',
            'subscribe'           => 'Подписка на рассылку об изменениях.',
            'subscribed'          => 'Вы подписались на рассылку email уведомлений. Проверьте вашу почту, чтобы подтвердить подписку.',
            'updated-subscribe'   => 'You\'ve succesfully updated your subscriptions.',
            'verified'            => 'Ваша подписка подтверждена. Спасибо!',
            'manage'              => 'Управление подпиской',
            'unsubscribe'         => 'Отписаться от рассылки.',
            'unsubscribed'        => 'Ваша подписка отменена.',
            'failure'             => 'Произошла ошибка при подписке на рассылку.',
            'already-subscribed'  => 'Невозможно оформить подписку на :email, т.к. на него уже оформлена подписка.',
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

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => 'Details and updates about the :name incident that occurred on :date',
            'schedule'  => 'Details about the scheduled maintenance period :name starting :startDate',
            'subscribe' => 'Subscribe to :app in order to receive updates of incidents and scheduled maintenance periods',
            'overview'  => 'Будьте в курсе последних новостей о состоянии сервиса от :app.',
        ],
    ],

    // Other
    'home'            => 'Главный экран',
    'powered_by'      => 'Работает на <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Times are shown in :timezone.',
    'about_this_site' => 'Об этом сайте',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Статусная лента',

];
