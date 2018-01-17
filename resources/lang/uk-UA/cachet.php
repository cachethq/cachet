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
        'last_updated' => 'Останнє оновлення :timestamp',
        'status'       => [
            0 => 'Невiдомий',
            1 => 'Працює',
            2 => 'Проблеми з продуктивністю',
            3 => 'Частковий перебій у роботі',
            4 => 'Перебій у роботі',
        ],
        'group' => [
            'other' => 'Інші компоненти',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Інцидентів не було',
        'past'         => 'Минулі інциденти',
        'stickied'     => 'Stickied інциденти',
        'scheduled'    => 'Запланована перерва у роботі',
        'scheduled_at' => ', заплановано на :timestamp',
        'posted'       => 'Опубліковано :timestamp',
        'posted_at'    => 'Posted at :timestamp',
        'status'       => [
            1 => 'Розслідування',
            2 => 'Ідентифікований',
            3 => 'Спостереження',
            4 => 'Виправлено',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Майбутні',
            1 => 'Виконується',
            2 => 'Завершено',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Система працює|[2,Inf] Всі системи працюють',
        'bad'   => '[0,1] Система має проблеми | [2, Inf] Деякі системи мають проблеми',
        'major' => '[0,1] Система має значні проблеми |[2,Inf] Декілька систем мають значні проблеми',
    ],

    'api' => [
        'regenerate' => 'Оновити ключ API',
        'revoke'     => 'Відкликати ключ API',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Останню годину',
            'hourly'    => 'Останні 12 годин',
            'weekly'    => 'Тиждень',
            'monthly'   => 'Місяць',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'   => 'Підписатись на оновлення',
        'unsubscribe' => 'Відписатись від :link',
        'button'      => 'Підписатись',
        'manage'      => [
            'no_subscriptions' => 'Наразі, ви підписані на всі оновлення.',
            'my_subscriptions' => 'Ви уже підписані до цих оновлень.',
        ],
        'email' => [
            'subscribe'          => 'Підписатись на email оновлення.',
            'subscribed'         => 'Ви підписались на розсилку email оновлень. Перевірте вашу пошту, для підтвердження підписки.',
            'verified'           => 'Ваша підписка підтверджена. Дякую!',
            'manage'             => 'Керування підпискою',
            'unsubscribe'        => 'Відписатись від розсилки.',
            'unsubscribed'       => 'Ваша відписка видалена.',
            'failure'            => 'Відбулась помилка при підписці на розсилку.',
            'already-subscribed' => 'Неможливо підписатись на :email, тому що на нього вже оформлена підписка.',
        ],
    ],

    'signup' => [
        'title'    => 'Зареєструйтесь',
        'username' => 'Ім’я користувача',
        'email'    => 'Електронна пошта',
        'password' => 'Пароль',
        'success'  => 'Ваш акаунт був створений.',
        'failure'  => 'Щось пішло не так з реєстрацією.',
    ],

    'system' => [
        'update' => 'Існує новіша версія Cachet. Ви можете дізнатися, як оновити систему <a href="https://docs.cachethq.io/docs/updating-cachet"> тут</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Закрити',
        'subscribe' => [
            'title'  => 'Підписатись на оновлення компонента',
            'body'   => 'Введіть вашу адресу електронної пошти, щоб підписатися на оновлення для цього компонента. Якщо ви вже підписані, вам надійде електронною поштою повідомлення для цього компонента.',
            'button' => 'Підписатись',
        ],
    ],

    // Other
    'home'            => 'Домашня сторінка',
    'description'     => 'Залишатись в курсі останніх оновлень стану :app.',
    'powered_by'      => 'Розроблено <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Часовий пояс :timezone.',
    'about_this_site' => 'Про сайт',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Новини стану',

];
