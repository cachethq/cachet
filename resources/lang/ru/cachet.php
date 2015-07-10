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
        'status' => [
            1 => 'Работает',
            2 => 'Падение производительности',
            3 => 'Частичные неполадки',
            4 => 'Не работает',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Инцидентов не происходило.',
        'past'          => 'Прошлые инциденты',
        'previous_week' => 'Прошлая неделя',
        'next_week'     => 'Следующая неделя',
        'none'          => 'Инцидентов не происходило.',
        'scheduled'     => 'Запланированное обслуживание',
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
        'good' => 'Все системы работают нормально.',
        'bad'  => 'В некоторых системах наблюдаются проблемы.',
    ],

    'api' => [
        'regenerate' => 'Сгенерировать ключ API',
        'revoke'     => 'Отозвать API ключ',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'hourly'  => 'Ежечасно',
            'daily'   => 'Ежедневно',
            'monthly' => 'Ежемесячно',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Подпишитесь, чтобы получать информацию об изменениях.',
        'button'    => 'Подписаться',
        'email'     => [
            'subscribe'    => 'Подписка на рассылку об изменениях.',
            'subscribed'   => 'Вы подписались на рассылку email уведомлений. Проверьте вашу почту, чтобы подтвердить подписку.',
            'verified'     => 'Ваша подписка подтверждена. Спасибо!',
            'unsubscribe'  => 'Отписаться от рассылки.',
            'unsubscribed' => 'Ваша подписка отменена.',
            'failure'      => 'Произошла ошибка при подписке на рассылку.',
            'verify'       => [
                'text'           => "Пожалуйста подтвердите вашу подписку на уведомления об изменениях статуса проекта :app_name.\n:link\nСпасибо! :app_name",
                'html-preheader' => 'Пожалуйста подтвердите подписку на уведомления :app_name.',
                'html'           => '<p>Пожалуйста подтвердите вашу подписку на уведомления об изменениях статуса проекта :app_name.</p><p><a href=":link">:link</a></p><p>Спасибо! :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "На проекте :app_name запланированы технические работы.\nСпасибо! :app_name",
                'html-preheader' => 'Плановые работы на проекте :app_name.',
                'html'           => '<p>На проекте :app_name запланированы технические работы.</p><p>Спасибо! :app_name</p>',
            ],
            'incident' => [
                'text'           => "На проекте :app_name добавлен новый инцидент.\nСпасибо! :app_name",
                'html-preheader' => 'Новый инцидент на проекте :app_name.',
                'html'           => '<p>На проекте :app_name добавлен новый инцидент.</p><p>Спасибо! :app_name</p>',
            ],
        ],
    ],

    // Other
    'powered_by'      => ':app Статусная страница работает на  <a href="https://cachethq.io">Cachet</a>.',
    'about_this_site' => 'Об этом сайте',
    'rss-feed'        => 'RSS фид',
    'atom-feed'       => 'Atom фид',
    'feed'            => 'Статус фид',

];
