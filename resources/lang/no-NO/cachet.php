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
        'last_updated' => 'Sist oppdatert :timestamp',
        'status'       => [
            1 => 'Ingen problemer',
            2 => 'Ytelsesproblemer',
            3 => 'Delvis brudd',
            4 => 'Større brudd',
        ],
        'group' => [
            'other' => 'Andre komponenter',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Ingen hendelser rapportert',
        'past'          => 'Tidligere hendelser',
        'previous_week' => 'Previous Week',
        'next_week'     => 'Next Week',
        'scheduled'     => 'Planlagt vedlikehold',
        'scheduled_at'  => ', planlagt :timestamp',
        'status'        => [
            0 => 'Scheduled', // TODO: Hopefully remove this.
            1 => 'Undersøkes',
            2 => 'Identifisert',
            3 => 'Observerer',
            4 => 'Løst',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Systemet er operativt| [2, Inf] Alle systemer er operative',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'Regenerer API-nøkkel',
        'revoke'     => 'Tilbakekall API-nøkkel',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Siste time',
            'hourly'    => 'Siste 12 timer',
            'weekly'    => 'Uke',
            'monthly'   => 'Måned',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates',
        'button'    => 'Abonner',
        'manage'    => [
            'no_subscriptions' => 'Du abonnerer for øyeblikket på alle oppdateringer.',
            'my_subscriptions' => 'Du abonnerer for øyeblikket på følgende oppdateringer.',
        ],
        'email' => [
            'subscribe'          => 'Abonner på e-postoppdateringer.',
            'subscribed'         => 'Du abonnerer nå på e-postvarslinger, sjekk din e-post for å bekrefte abonneringen.',
            'verified'           => 'Ditt epost abonnement er bekreftet!',
            'manage'             => 'Administrer ditt abonnement',
            'unsubscribe'        => 'Meld av e-postvarsling.',
            'unsubscribed'       => 'Ditt e-postabonnement har blitt kansellert.',
            'failure'            => 'Noe gikk galt med abonneringen.',
            'already-subscribed' => 'Kan ikke abonnere: email fordi de allerede er abonnenter.',
            'verify'             => [
                'text'   => "Vennligst bekreft ditt e-postabonnement til :app_name statusoppdateringer.\n:link",
                'html'   => '<p>Vennligst bekreft ditt e-postabonnementet til :app_name statusoppdateringer.</p>',
                'button' => 'Bekreft abonnementet',
            ],
            'maintenance' => [
                'subject' => '[Planlagt vedlikehold] :name',
            ],
            'incident' => [
                'subject' => '[Ny hendelse] :status: :name',
            ],
            'component' => [
                'subject'       => 'Status-oppdatering for komponent',
                'text'          => 'Komponenten :component_name har fått oppdatert status. Komponenten er nå på: component_human_status.\nTakk, :app_name',
                'html'          => '<p>Komponenten :component_name har fått oppdatert status. Komponenten er nå på: component_human_status.</p><p>Takk, :app_name</p>',
                'tooltip-title' => 'Abonner på varsler for :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "You have been invited to the team :app_name status page, to sign up follow the next link.\n:link\nThank you, :app_name",
                'html' => '<p>You have been invited to the team :app_name status page, to sign up follow the next link.</p><p><a href=":link">:link</a></p><p>Thank you, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Registerer deg',
        'username' => 'Brukernavn',
        'email'    => 'E-post',
        'password' => 'Passord',
        'success'  => 'Din konto er opprettet.',
        'failure'  => 'Noe gikk galt med registreringsprosessen.',
    ],

    'system' => [
        'update' => 'Det finnes en nyere versjon av Cachet. Du kan lære hvordan å oppdatere <a href="https://docs.cachethq.io/docs/updating-cachet"> her</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Lukk',
        'subscribe' => [
            'title'  => 'Abonner for å motta varslinger for komponenten på e-post',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => 'Abonner',
        ],
    ],

    // Other
    'home'            => 'Home',
    'description'     => 'Hold deg oppdatert med de nyeste service-oppdateringene fra :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Om denne siden',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
