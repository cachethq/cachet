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
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Nejsou nahlášeny žádné incidenty',
        'past'          => 'Minulé incidenty',
        'previous_week' => 'Předchozí týden',
        'next_week'     => 'Příští týden',
        'stickied'      => 'Připnuté incidenty',
        'scheduled'     => 'Plánovaná odstávka',
        'scheduled_at'  => ', plánované na :timestamp',
        'posted'        => 'Publikováno :timestamp',
        'status'        => [
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
        'good'  => '[0,1] Služba je v provozu|[2,Inf] Všechny služby fungují bez problémů',
        'bad'   => '[0,1] Služba má problémy|[2,Inf] Některá ze služeb má problémy',
        'major' => '[0,1] Služba má celkový výpadek|[2,Inf] Některé služby mají celkový výpadek',
    ],

    'api' => [
        'regenerate' => 'Obnovit API klíč',
        'revoke'     => 'Zrušit API klíč',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Před hodinou',
            'hourly'    => 'Posledních 12 hodin',
            'weekly'    => 'Týden',
            'monthly'   => 'Měsíc',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'   => 'Přihlásit se k odběru upozornění',
        'unsubscribe' => 'Unsubscribe at :link',
        'button'      => 'Přihlásit',
        'manage'      => [
            'no_subscriptions' => 'Aktuálně jsi přihlášen(a) ke všem upozorněním.',
            'my_subscriptions' => 'Aktuálně jsi přihlášen(a) k následujícím upozorněním.',
        ],
        'email' => [
            'subscribe'          => 'Přihlásit se k zasílání upozornění e-mailem.',
            'subscribed'         => 'Proběhlo přihlášení k e-mailovým upozorněním, potvrďte ho prosím na vašem e-mailu.',
            'verified'           => 'E-mail pro zasílání upozornění byl ověřen. Děkujeme!',
            'manage'             => 'Spravovat odběry',
            'unsubscribe'        => 'Odhlásit z odběru e-mailových upozornění.',
            'unsubscribed'       => 'Odběr e-mailových upozornění byl zrušen.',
            'failure'            => 'Došlo k chybě při nastavení odběru e-mailů.',
            'already-subscribed' => 'Nelze přihlásit k odběru :email, protože je již přihlášen.',
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
            'body'   => 'Zadej svůj email pro odběr upozornění pro tuto službu. Pokud již odebíráš upozornění, budeš nadále dostávat emaily pro tuto službu.',
            'button' => 'Přihlásit',
        ],
    ],

    // Other
    'home'            => 'Hlavní stránka',
    'description'     => 'Držte krok s nejnovějšími aktualizacemi od: app.',
    'powered_by'      => 'Vytvořeno pomocí <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Časová zóna je :timezone.',
    'about_this_site' => 'O tomto webu',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Kanál stavů',

];