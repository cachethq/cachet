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
            0 => 'Unknown',
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
        'none'         => 'Nincs incidens jelentve',
        'past'         => 'Múltbeli incidensek',
        'stickied'     => 'Kitűzőtt Incidensek',
        'scheduled'    => 'Ütemezett karbantartás',
        'scheduled_at' => ', ütemezett :timestamp',
        'posted'       => 'Közzétéve :timestamp',
        'status'       => [
            1 => 'Kivizsgálás',
            2 => 'Azonosítva',
            3 => 'Megfigyelés',
            4 => 'Javítva',
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
        'good'  => '[0,1] Rendszer üzemképes|[2,Inf] Az összes rendszer üzemképes',
        'bad'   => '[0,1] A rendszer problémát észlelt|[2,Inf] Több rendszer problémát észlelt',
        'major' => '[0,1] A szolgáltatás jelenleg nem elérhető|[2,Inf] Több szolgáltatás nem elérhető',
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
        'subscribe'   => 'Kérjük iratkozzon fel a legújabb frissítésekért',
        'unsubscribe' => 'Unsubscribe at :link',
        'button'      => 'Feliratkozás',
        'manage'      => [
            'no_subscriptions' => 'Minden frissítésre feliratkozva.',
            'my_subscriptions' => 'A következő frissítésekre feliratkozva.',
        ],
        'email' => [
            'subscribe'          => 'Feliratkozás e-mail értesítésekre.',
            'subscribed'         => 'Ön feliratkozott e-mailen, kérjük ellenőrizze e-mail fiókját a véglegesítéshez.',
            'verified'           => 'Feliratkozásod megerősítve. Köszönjük!',
            'manage'             => 'Feliratkozás kezelése',
            'unsubscribe'        => 'E-mail értesítések kikapcsolása.',
            'unsubscribed'       => 'E-mail feliratkozás törölve.',
            'failure'            => 'Hiba történt a feliratkozással.',
            'already-subscribed' => ':email már fel van iratkozva.',
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
        'update' => 'Cachet frissítések találhatók! <a href="https://docs.cachethq.io/docs/updating-cachet">Itt</a> olvashatsz utána, hogyan kell frissíteni.',
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
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Alkalmazott időzóna: :timezone.',
    'about_this_site' => 'A webhelyről',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Státusz Feed',

];
