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
        'last_updated' => 'Sidst opdateret :timestamp',
        'status'       => [
            1 => 'Normal',
            2 => 'Hastighedsproblemer',
            3 => 'Nogen udfald',
            4 => 'Store problemer',
        ],
        'group' => [
            'other' => 'Andre komponenter',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Ingen hændelser er rapporteret',
        'past'          => 'Tidligere hændelser',
        'previous_week' => 'Forrige uge',
        'next_week'     => 'Næste uge',
        'scheduled'     => 'Planlagt vedligeholdelse',
        'scheduled_at'  => ', planlagt til :timestamp',
        'status'        => [
            0 => 'Planlagt', // TODO: Hopefully remove this.
            1 => 'Undersøger',
            2 => 'Identificeret',
            3 => 'Overvåger',
            4 => 'Rettet',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Systemet virker|[2,Inf] Alle systemer virker',
        'bad'   => '[0,1] Systemet har i øjeblikket problemer|[2,Inf] Nogle systemer har i øjeblikket problemer',
        'major' => '[0,1] Systemet har i øjeblikket store problemer|[2,Inf] Nogle systemer har i øjeblikket store problemer',
    ],

    'api' => [
        'regenerate' => 'Generer en ny API nøgle',
        'revoke'     => 'Tilbagekald API nøgle',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Sidste time',
            'hourly'    => 'Sidste 12 timer',
            'weekly'    => 'Ugentlig',
            'monthly'   => 'Månedlig',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Tilmeld dig for at få de seneste opdateringer',
        'button'    => 'Abonner',
        'manage'    => [
            'no_subscriptions' => 'Du abonner i øjeblikket på alle opdateringer.',
            'my_subscriptions' => 'Du abonnere i øjeblikket på følgende opdateringer.',
        ],
        'email' => [
            'subscribe'          => 'Abonner på email opdateringer.',
            'subscribed'         => 'Du er blevet tilmeldt email notifikationer. Vi har sendt dig en bekræftelse på den indtastede email-adresse.',
            'verified'           => 'Din tilmelding er nu blevet bekræftet, tak.',
            'manage'             => 'Manage your subscription',
            'unsubscribe'        => 'Afmeld email notifikationer.',
            'unsubscribed'       => 'Du er nu blevet frameldt vores emailnotifikationer.',
            'failure'            => 'Noget gik galt med bekræftelsen.',
            'already-subscribed' => 'Kan ikke abonnere da :email allerede er tilmeldt.',
            'verify'             => [
                'text'   => "Please confirm your email subscription to :app_name status updates.\n:link",
                'html'   => '<p>Please confirm your email subscription to :app_name status updates.</p>',
                'button' => 'Confirm Subscription',
            ],
            'maintenance' => [
                'subject' => '[Maintenance Scheduled] :name',
            ],
            'incident' => [
                'subject' => '[New Incident] :status: :name',
            ],
            'component' => [
                'subject'       => 'Komponent status opdatering',
                'text'          => 'Komponentet :component_name har ændret status. Komponentet er nu :component_human_status.\nTak, :app_name',
                'html'          => '<p>Komponentet :component_name har ændret status. Komponentet er nu :component_human_status.</p><p>\nTak, :app_name</p>',
                'tooltip-title' => 'Abonner på notifikation for :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "Du er blevet inviteret til :app_name status status side, Klik på linket for at oprette dig.\n:link\nTak, :app_name",
                'html' => '<p>Du er blevet inviteret til :app_name status side, Klik på linket for at oprette dig.</p><p><a href=":link">:link</a></p><p>Tak, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Tilmeld',
        'username' => 'Brugernavn',
        'email'    => 'Email',
        'password' => 'Adgangskode',
        'success'  => 'Din konto er nu oprettet.',
        'failure'  => 'Noget gik galt under tilmeldingen.',
    ],

    'system' => [
        'update' => 'Der er en nyere version af Cachet tilgængelig. Du kan læse mere om hvordan du opdatere <a href="https://docs.cachethq.io/docs/updating-cachet">her</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Luk',
        'subscribe' => [
            'title'  => 'Abonner på komponent opdateringer',
            'body'   => 'Indtast din email adresse for at abonnere på opdateringer angående dette komponent. Hvis du allerede er tilmeldt, vil du modtage emails angående dette komponent.',
            'button' => 'Abonner',
        ],
    ],

    // Other
    'home'            => 'Hjem',
    'description'     => 'Hold dig opdateret med de seneste opdateringer fra :app.',
    'powered_by'      => 'Drevet af <a href="https://cachethq.io" class="links"> Cachet</a>.',
    'about_this_site' => 'Om denne side',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
