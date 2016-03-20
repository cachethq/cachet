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
        'last_updated' => 'Last updated :timestamp',
        'status'       => [
            1 => 'Работает',
            2 => 'Проблемы с производительностью',
            3 => 'Перебои в работе',
            4 => 'Полное отключение',
        ],
        'group' => [
            'other' => 'Other Components',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Без происшествий',
        'past'          => 'Последние инциденты',
        'previous_week' => 'Предыдущая неделя',
        'next_week'     => 'Следующая неделя',
        'scheduled'     => 'Плановое техническое обслуживание',
        'scheduled_at'  => ', запланировано :timestamp',
        'status'        => [
            0 => 'Запланировано', // TODO: Hopefully remove this.
            1 => 'Проводим анализ проблемы',
            2 => 'Причина определена',
            3 => 'Под наблюдением',
            4 => 'Исправлено',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] System operational|[2,Inf] All systems are operational',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'Сгенерировать ключ API',
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
        'subscribe' => 'Подпишитесь, чтобы получать информацию об изменениях',
        'button'    => 'Подписаться',
        'manage'    => [
            'no_subscriptions' => 'You\'re currently subscribed to all updates.',
            'my_subscriptions' => 'You\'re currently subscribed to the following updates.',
        ],
        'email' => [
            'subscribe'          => 'Подписка на рассылку об изменениях.',
            'subscribed'         => 'Вы подписались на рассылку email уведомлений. Проверьте вашу почту, чтобы подтвердить подписку.',
            'verified'           => 'Ваша подписка подтверждена. Спасибо!',
            'manage'             => 'Manage your subscription.',
            'unsubscribe'        => 'Отписаться от рассылки.',
            'unsubscribed'       => 'Ваша подписка отменена.',
            'failure'            => 'Произошла ошибка при подписке на рассылку.',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
            'verify'             => [
                'text'           => "Пожалуйста подтвердите вашу подписку на уведомления об изменениях статуса проекта :app_name.\n:link\nСпасибо! :app_name",
                'html-preheader' => 'Пожалуйста подтвердите подписку на уведомления :app_name.',
                'html'           => '<p>Пожалуйста, подтвердите ваш email для получения обновлений от :app_name</p><p><a href=":link">:link</a></p><p>Спасибо, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "На проекте :app_name запланированы технические работы.\nСпасибо! :app_name",
                'html-preheader' => 'Плановые работы на проекте :app_name.',
                'html'           => '<p>Плановые работы для :app_name зарегестрированы.</p>',
            ],
            'incident' => [
                'text'           => "На проекте :app_name добавлен новый инцидент.\nСпасибо! :app_name",
                'html-preheader' => 'Новый инцидент на проекте :app_name.',
                'html'           => '<p>На проекте :app_name добавлен новый инцидент.</p><p>Спасибо! :app_name</p>',
            ],
            'component' => [
                'subject'        => 'Component Status Update',
                'text'           => 'The component :component_name has seen a status change. The component is now at :component_human_status.\nThank you, :app_name',
                'html-preheader' => 'Component Update from :app_name',
                'html'           => '<p>The component :component_name has seen a status change. The component is now at :component_human_status.</p><p>Thank you, :app_name</p>',
                'tooltip-title'  => 'Subscribe to notifications for :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text'           => "You have been invited to the team :app_name status page, to sign up follow the next link.\n:link\nThank you, :app_name",
                'html-preheader' => 'You have been invited to the team :app_name.',
                'html'           => '<p>You have been invited to the team :app_name status page, to sign up follow the next link.</p><p><a href=":link">:link</a></p><p>Thank you, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Зарегистрироваться',
        'username' => 'Имя пользователя',
        'email'    => 'Email',
        'password' => 'Пароль',
        'success'  => 'Ваша учетная запись создана.',
        'failure'  => 'Something went wrong with the signup.',
    ],

    'system' => [
        'update' => 'There is a newer version of Cachet available. You can learn how to update <a href="https://docs.cachethq.io/docs/updating-cachet">here</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Закрыть',
        'subscribe' => [
            'title'  => 'Subscribe to component updates',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => 'Подписаться',
        ],
    ],

    // Other
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => ':app Status Page is powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Об этом сайте',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Статус фид',

];
