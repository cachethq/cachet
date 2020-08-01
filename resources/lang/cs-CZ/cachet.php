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
            0 => 'Neznámý',
            1 => 'V provozu',
            2 => 'Problémy s výkonem',
            3 => 'Částečný výpadek',
            4 => 'Závažný výpadek',
        ],
        'group' => [
            'other' => 'Ostatní služby',
        ],
        'select_all'   => 'Označit vše',
        'deselect_all' => 'Odznačit vše',
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Nejsou nahlášeny žádné incidenty',
        'past'         => 'Minulé incidenty',
        'stickied'     => 'Připnuté incidenty',
        'scheduled'    => 'Plánovaná odstávka',
        'scheduled_at' => ', plánované na :timestamp',
        'posted'       => 'Přidáno :timestamp od :username',
        'posted_at'    => 'Publikováno :timestamp',
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
            0 => 'Blížící se',
            1 => 'Probíhající',
            2 => 'Hotovo',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Služba je v provozu|[2,*]Všechny služby fungují bez problémů',
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
            'last_hour' => 'Během poslední hodiny',
            'hourly'    => 'Posledních 12 hodin',
            'weekly'    => 'Týden',
            'monthly'   => 'Měsíc',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'           => 'Přihlaste se změnám stavu a aktualizacím incidentů',
        'unsubscribe'         => 'Odhlásit odběr',
        'button'              => 'Přihlásit',
        'manage_subscription' => 'Spravovat odběry',
        'manage'              => [
            'notifications'       => 'Oznámení',
            'notifications_for'   => 'Spravujte oznámení pro',
            'no_subscriptions'    => 'Aktuálně jsi přihlášen(a) ke všem upozorněním.',
            'update_subscription' => 'Aktualizovat odběry',
            'my_subscriptions'    => 'Aktuálně jsi přihlášen(a) k následujícím upozorněním.',
            'manage_at_link'      => 'Spravovat odběry na :link',
        ],
        'email' => [
            'manage_subscription' => 'Poslali jsme Vám e-mail, prosím klikněte na odkaz pro správu odběru',
            'subscribe'           => 'Přihlásit se k zasílání upozornění e-mailem.',
            'subscribed'          => 'Proběhlo přihlášení k e-mailovým upozorněním, potvrďte ho prosím na vašem e-mailu.',
            'updated-subscribe'   => 'Úspěšně jste aktualizovali své odběry.',
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
            'incident'  => 'Podrobnosti a aktuální informace o událost :name, ke které došlo :date',
            'schedule'  => 'Podrobnosti o plánované údržbě :name od :startDate',
            'subscribe' => 'Přihlaste se k odběru :app, abyste obdrželi aktualizace o událostech a plánované údržbě',
            'overview'  => 'Držte krok s nejnovějšími aktualizacemi od: app.',
        ],
    ],

    // Other
    'home'            => 'Hlavní stránka',
    'powered_by'      => 'Vytvořeno pomocí <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Časová zóna je :timezone.',
    'about_this_site' => 'O tomto webu',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Kanál stavů',

];
