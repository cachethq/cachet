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
        'last_updated' => 'Poslední aktualizace :timestamp',
        'status'       => [
            0 => 'Unknown',
            1 => 'V provozu',
            2 => 'Problémy s výkonem',
            3 => 'Částečný výpadek',
            4 => 'Závažný výpadek',
        ],
        'group' => [
            'other' => 'Ostatní služby',
        ],
        'select_all'   => 'Select All',
        'deselect_all' => 'Deselect All',
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Nejsou nahlášeny žádné incidenty',
        'past'         => 'Minulé incidenty',
        'stickied'     => 'Stickied Incidents',
        'scheduled'    => 'Maintenance',
        'scheduled_at' => ', plánované na :timestamp',
        'posted'       => 'Posted :timestamp',
        'posted_at'    => 'Posted at :timestamp',
        'status'       => [
            1 => 'Zkoumání příčiny',
            2 => 'Problém identifikován',
            3 => 'Sledování',
            4 => 'Opraveno',
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
        'regenerate' => 'Obnovit API klíč',
        'revoke'     => 'Zrušit API klíč',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Během poslední hodiny',
            'hourly'    => 'Posledních 12 hodin',
            'weekly'    => 'Týden',
            'monthly'   => 'Měsíc',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'           => 'Subscribe to status changes and incident updates',
        'unsubscribe'         => 'Unsubscribe',
        'button'              => 'Přihlásit',
        'manage_subscription' => 'Manage subscription',
        'manage'              => [
            'notifications'       => 'Oznámení',
            'notifications_for'   => 'Manage notifications for',
            'no_subscriptions'    => 'Aktuálně jsi přihlášen(a) ke všem upozorněním.',
            'update_subscription' => 'Update Subscription',
            'my_subscriptions'    => 'Aktuálně jsi přihlášen(a) k následujícím upozorněním.',
            'manage_at_link'      => 'Manage your subscriptions at :link',
        ],
        'email' => [
            'manage_subscription' => 'We\'ve sent you an email, please click the link to manage your subscription',
            'subscribe'           => 'Přihlásit se k zasílání upozornění e-mailem.',
            'subscribed'          => 'Proběhlo přihlášení k e-mailovým upozorněním, potvrďte ho prosím na vašem e-mailu.',
            'updated-subscribe'   => 'You\'ve succesfully updated your subscriptions.',
            'verified'            => 'E-mail pro zasílání upozornění byl ověřen. Děkujeme!',
            'manage'              => 'Spravovat e-mailové odběry',
            'unsubscribe'         => 'Odhlásit z odběru e-mailových upozornění.',
            'unsubscribed'        => 'Odběr e-mailových upozornění byl zrušen.',
            'failure'             => 'Došlo k chybě při nastavení odběru e-mailů.',
            'already-subscribed'  => 'Nelze přihlásit k odběru :email, protože je již přihlášen.',
        ],
    ],

    'signup' => [
        'title'    => 'Registrovat se',
        'username' => 'Uživatelské jméno',
        'email'    => 'E-mail',
        'password' => 'Heslo',
        'success'  => 'Tvůj účet byl vytvořen.',
        'failure'  => 'Něco je špatně, nelze se registrovat.',
    ],

    'system' => [
        'update' => 'Je k dispozici nová verze Cachet. Jak provést update najdeš <a href="https://docs.cachethq.io/docs/updating-cachet">zde</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Zavřít',
        'subscribe' => [
            'title'  => 'Přihlásit se k odběru upozornění',
            'body'   => 'Zadej svůj email pro odběr upozornění této služby. Pokud již odebíráš upozornění, budeš nadále dostávat emaily pro tuto službu.',
            'button' => 'Přihlásit',
        ],
    ],

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => 'Details and updates about the :name incident that occurred on :date',
            'schedule'  => 'Details about the scheduled maintenance period :name starting :startDate',
            'subscribe' => 'Subscribe to :app in order to receive updates of incidents and scheduled maintenance periods',
            'overview'  => 'Držte krok s nejnovějšími aktualizacemi od: app.',
        ],
    ],

    // Other
    'home'            => 'Hlavní stránka',
    'powered_by'      => 'Vytvořeno pomocí <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Times are shown in :timezone.',
    'about_this_site' => 'O tomto webu',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Kanál stavů',

];
