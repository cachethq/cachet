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
        'last_updated' => 'Utoljára frissítve: :timestamp',
        'status'       => [
            1 => 'Működik',
            2 => 'Teljesítmény problémák',
            3 => 'Részleges leállás',
            4 => 'Teljes leállás',
        ],
        'group' => [
            'other' => 'Egyéb komponensek',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Nincs incidens jelentve',
        'past'          => 'Múltbeli incidensek',
        'previous_week' => 'Previous Week',
        'next_week'     => 'Next Week',
        'scheduled'     => 'Ütemezett karbantartás',
        'scheduled_at'  => ', ütemezve: :timestamp',
        'status'        => [
            0 => 'Scheduled', // TODO: Hopefully remove this.
            1 => 'Kivizsgálás alatt',
            2 => 'Azonosítva',
            3 => 'Megfigyelés alatt',
            4 => 'Javítva',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Rendszer üzemképes|[2,Inf] Az összes rendszer üzemképes',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'API kulcs újragenerálása',
        'revoke'     => 'API kulcs visszavonása',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Előző óra',
            'hourly'    => 'Elmúlt 12 óra',
            'weekly'    => 'Heti',
            'monthly'   => 'Havi',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates',
        'button'    => 'Feliratkozás',
        'manage'    => [
            'no_subscriptions' => 'Minden frissítésre feliratkozva.',
            'my_subscriptions' => 'A következő frissítésekre feliratkozva.',
        ],
        'email' => [
            'subscribe'          => 'Feliratkozás e-mail értesítésekre.',
            'subscribed'         => 'Ön feliratkozott e-mailen, kérjük ellenőrizze e-mail fiókját a véglegesítéshez.',
            'verified'           => 'Feliratkozása megerősítve. Köszönjük!',
            'manage'             => 'Feliratkozás kezelése',
            'unsubscribe'        => 'Leiratkozás az e-mail értesítésekről.',
            'unsubscribed'       => 'E-mail feliratkozás törölve.',
            'failure'            => 'Hiba történt a feliratkozással.',
            'already-subscribed' => ':email már fel van iratkozva.',
            'verify'             => [
                'text'   => "Kérjük erősítse meg az email feliratkozását ide: :app_name állapot frissítések.\n:link",
                'html'   => '<p>Kérjük erősítse meg email feliratkozását ide: :app_name állapot frissítések.</p>',
                'button' => 'Feliratkozás megerősítése',
            ],
            'maintenance' => [
                'subject' => '[Karbantartás ütemezve] :name',
            ],
            'incident' => [
                'subject' => '[Új incidens] :status: :name',
            ],
            'component' => [
                'subject'       => 'Komponens Állapot Frissítés',
                'text'          => ':component_name nevű komponens állapota megváltozott. A komponens most már :component_human_status.\nKöszönjük, :app_name',
                'html'          => '<p>:component_name nevő komponens állapota megváltozott. A komponens mostmár :component_human_status.</p><p>Köszönjük, :app_name</p>',
                'tooltip-title' => 'Kérjük iratkozzon fel :component_name értesítéseire.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "Ön meg lett hívva a(z) :app_name oldalára, feliratkozáshoz kérjük kattintson a linkre.\n:link\nKöszönjük, :app_name",
                'html' => '<p>Ön meg lett hívva a(z) :app_name oldalára, feliratkozáshoz kérjük kattintson a linkre.</p><p><a href=":link">:link</a></p><p>Köszönjük, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Regisztráció',
        'username' => 'Felhasználónév',
        'email'    => 'E-mail cím',
        'password' => 'Jelszó',
        'success'  => 'Fiókja elkészült.',
        'failure'  => 'Hiba történt regisztráció közben.',
    ],

    'system' => [
        'update' => 'Elérhető egy újabb Cachet verzió! <a href="https://docs.cachethq.io/docs/updating-cachet">Itt</a> olvashat utána a frissítés menetének.',
    ],

    // Modal
    'modal' => [
        'close'     => 'Bezárás',
        'subscribe' => [
            'title'  => 'Feliratkozás komponens frissítésekre',
            'body'   => 'Kérjük adja meg az e-mail címét hogy értesítéseket kapjon ezen komponens frissítéseire. Ha már feliratkozott, akkor nincs miért aggódnia.',
            'button' => 'Feliratkozás',
        ],
    ],

    // Other
    'home'            => 'Kezdőoldal',
    'description'     => 'Maradjon mindig naprakész :app legújabb frissítéseivel.',
    'powered_by'      => 'A motorháztető alatt a <a href="https://cachethq.io" class="links">Cachet</a> dolgozik.',
    'about_this_site' => 'A webhelyről',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Státusz Feed',

];
