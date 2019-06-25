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
        'next_week'     => 'Následující týden',
        'scheduled'     => 'Plánovaná údržba',
        'scheduled_at'  => ', plánované na :timestamp',
        'status'        => [
            0 => 'Naplánováno', // TODO: Hopefully remove this.
            1 => 'Zkoumání příčiny',
            2 => 'Problém identifikován',
            3 => 'Sledování',
            4 => 'Opraveno',
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
            'last_hour' => 'Během poslední hodiny',
            'hourly'    => 'Posledních 12 hodin',
            'weekly'    => 'Týden',
            'monthly'   => 'Měsíc',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Přihlásit se k odběru upozornění',
        'button'    => 'Přihlásit',
        'manage'    => [
            'no_subscriptions' => 'Aktuálně jsi přihlášen(a) ke všem upozorněním.',
            'my_subscriptions' => 'Aktuálně jsi přihlášen(a) k následujícím upozorněním.',
        ],
        'email' => [
            'subscribe'          => 'Přihlásit se k zasílání upozornění e-mailem.',
            'subscribed'         => 'Proběhlo přihlášení k e-mailovým upozorněním, potvrďte ho prosím na vašem e-mailu.',
            'verified'           => 'E-mail pro zasílání upozornění byl ověřen. Děkujeme!',
            'manage'             => 'Spravovat e-mailové odběry',
            'unsubscribe'        => 'Odhlásit z odběru e-mailových upozornění.',
            'unsubscribed'       => 'Odběr e-mailových upozornění byl zrušen.',
            'failure'            => 'Došlo k chybě při nastavení odběru e-mailů.',
            'already-subscribed' => 'Nelze přihlásit k odběru :email, protože je již přihlášen.',
            'verify'             => [
                'text'   => "Potvrď prosím svůj email k odběru upozornění od :app_name.\n:link",
                'html'   => '<p>Prosím potvrď svůj email k odběru upozornění pro :app_name.</p>',
                'button' => 'Potvrdit odběr',
            ],
            'maintenance' => [
                'subject' => '[Naplánovaná odstávka] :name',
            ],
            'incident' => [
                'subject' => '[Nový incident] :status: :name',
            ],
            'component' => [
                'subject'       => 'Aktualizace stavu služby',
                'text'          => 'Byl změněn stav služby :component_name. Služba má nyní stav :component_human_status.\nDěkujeme, :app_name',
                'html'          => '<p>Byl změněn stav služby :component_name. Služba má nyní stav :component_human_status.</p><p>Děkujeme, :app_name</p>',
                'tooltip-title' => 'Přihlásit se k odběru upozornění pro :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "Byl(a) jsi pozván(a) do teamu :app_name, k registraci klikni na následující odkaz.\n:link\nDěkujeme, :app_name",
                'html' => '<p>Byl(a) jsi pozván(a) do teamu :app_name, k registraci klikni na následující odkaz.</p><p><a href=":link">:link</a></p><p>Děkujeme, :app_name</p>',
            ],
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

    // Other
    'home'            => 'Hlavní stránka',
    'description'     => 'Držte krok s nejnovějšími aktualizacemi od: app.',
    'powered_by'      => 'Vytvořeno pomocí <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'O tomto webu',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Kanál stavů',

];
