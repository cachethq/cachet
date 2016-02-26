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
            1 => 'Működik',
            2 => 'Teljesítmény problémák',
            3 => 'Részleges leállás',
            4 => 'Teljes leállás',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Jelenleg nincs ismert probléma',
        'past'          => 'Régebbi problémák',
        'previous_week' => 'Múlt hét',
        'next_week'     => 'Jövő hét',
        'scheduled'     => 'Ütemezett karbantartás',
        'scheduled_at'  => ', ütemezett :timestamp',
        'status'        => [
            0 => 'Ütemezett', // TODO: Hopefully remove this.
            1 => 'Kivizsgálás',
            2 => 'Azonosítva',
            3 => 'Megfigyelés',
            4 => 'Javítva',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Rendszer rendben|[2,Inf] Minden rendszer működik',
        'bad'   => '[0,1] Részleges rendszerhiba|[2,Inf] Egyes alrendszerek jelenleg nem elérhetőek',
        'major' => '[0,1] Rendszerhiba|[2,Inf] Egyes alrendszerek jelenleg nem elérhetőek',
    ],

    'api' => [
        'regenerate' => 'API kulcs újragenerálása',
        'revoke'     => 'API kulcs visszavonása',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Elmúlt 1 óra',
            'hourly'    => 'Elmúlt 12 óra',
            'weekly'    => 'Hét',
            'monthly'   => 'Hónap',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Iratkozzon fel, hogy mindig megkapja a legfrissebb értesítéseket',
        'button'    => 'Feliratkozás',
        'email'     => [
            'subscribe'          => 'Feliratkozás e-mail értesítésekre.',
            'subscribed'         => 'Ön feliratkozott az e-mail értesítésekre, kérjük erősítse meg szándékát a levélben küldött link segítségével',
            'verified'           => 'E-mail értesítésekre való feliratkozás sikeres',
            'unsubscribe'        => 'Leiratkozás e-mail értesítésekről',
            'unsubscribed'       => 'E-mail értesítésekről való leiratkozás sikeres',
            'failure'            => 'Hiba történt az feliratkozáskor',
            'already-subscribed' => 'Ezen e-mail cím már feliratkozott az értesítéskre :email',
            'verify'             => [
                'text'           => "Kérjük erősítse meg feliratkozási szándékát az alábbi szolgáltatás értesítéseire: :app_name.\n:link\nKöszönettel, :app_name",
                'html-preheader' => 'Erősítse meg feliratkozási szándékát a(z) :app_name értesítéseire',
                'html'           => '<p>Kérjük erősítse meg feliratkozási szándékát az alábbi szolgáltatás értesítéseire: :app_name.</p><p><a href=":link">:link</a></p><p>Köszönettel, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Az alábbi szolgáltatásra karbantartást ütemeztek be: :app_name.\nÜdvözlettel, :app_name",
                'html-preheader' => 'Ütemezett karbantartás az alábbi szolgáltatásra - :app_name.',
                'html'           => '<p>Az alábbi szolgáltatásra karbantartást ütemeztek be: :app_name.</p>',
            ],
            'incident' => [
                'text'           => "Az alábbi szolgáltatás jelenleg nem elérhető: :app_name.\nÜdvözlettel, :app_name",
                'html-preheader' => 'Az alábbi szolgáltatás jelenleg nem elérhető - :app_name.',
                'html'           => '<p>Az alábbi szolgáltatás jelenleg nem elérhető: :app_name.</p><p>Üdvözlettel, :app_name</p>',
            ],
            'component' => [
                'subject'        => 'Komponens állapot-változás',
                'text'           => 'Az alábbi komponens állapota megváltozott: :component_name. Az új állapot: :component_human_status.\nÜdvözlettel, :app_name',
                'html-preheader' => ':app_name komponens állapot-változás',
                'html'           => '<p>Az alábbi komponens állapota megváltozott: :component_name. Az új állapot: :component_human_status.</p><p>Üdvözlettel, :app_name</p>',
                'tooltip-title'  => 'Feliratkozás ezen komponens értesítéseire :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text'           => "Önt meghívták az alábbi szolgáltatás állapot oldalára: :app_name status page, regisztrációhoz kövesse az alábbi linket.\n:link\nÜdvözlettel, :app_name",
                'html-preheader' => 'Meghívó a :app_name csapatába',
                'html'           => '<p>Önt meghívták az alábbi szolgáltatás állapot oldalára: :app_name status page, regisztrációhoz kövesse az alábbi linket.</p><p><a href=":link">:link</a></p><p>Üdvözlettel, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Regisztráció',
        'username' => 'Felhasználónév',
        'email'    => 'E-mail cím',
        'password' => 'Jelszó',
        'success'  => 'Sikeres regisztráció',
        'failure'  => 'Hiba a regisztráció során',
    ],

    'system' => [
        'update' => 'Elérhető újabb Cachet verzió. További információk a frissítésről <a href="https://docs.cachethq.io/docs/updating-cachet">itt</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Bezárás',
        'subscribe' => [
            'title'  => 'Feliratkozás a komponens frissítéseire',
            'body'   => 'Komponens frissítésekre való feliratkozáshoz írja be az e-mail címét. Amennyiben már feliratkozott, akkor ezen komponens e-mailjeit is meg fogja kapni.',
            'button' => 'Feliratkozás',
        ],
    ],

    // Other
    'powered_by'      => ':app státusz oldal, powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Az oldalról',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Státusz Feed',

];
