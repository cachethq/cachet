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
        'previous_week' => 'Forrige Uke',
        'next_week'     => 'Neste Uke',
        'scheduled'     => 'Planlagt vedlikehold',
        'scheduled_at'  => ', planlagt :timestamp',
        'status'        => [
            0 => 'Planlagt', // TODO: Hopefully remove this.
            1 => 'Undersøkes',
            2 => 'Identifisert',
            3 => 'Observerer',
            4 => 'Løst',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Systemet er operativt| [2, Inf] Alle systemer er operative',
        'bad'   => '[0,1] Systemet opplever for øyeblikket problemer| [2,Inf] Noen systemer opplever problemer',
        'major' => '[0,1] Det er for øyeblikket et større brudd i systemet|[2,Inf] Noen systemer opplever for øyeblikket større brudd',
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
        'subscribe' => 'Abonner for å få de siste oppdateringene',
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
                'text' => "Du er invitert til :app_name sin statusside, for registrering, følg denne linken.\n:link\nTakk, :app_name",
                'html' => '<p>Du er invitert til :app_name sin statusside, for å registrere deg følg denne koblingen.</p> <p><a href=":link">: link</a></p> <p>Takk, :app_name</p>',
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
            'body'   => 'Skriv inn e-postadressen din for å abonnere på varslinger for denne komponenten. Hvis du allerede er abonnent vil alt fortsette som før.',
            'button' => 'Abonner',
        ],
    ],

    // Other
    'home'            => 'Forside',
    'description'     => 'Hold deg oppdatert med de nyeste service-oppdateringene fra :app.',
    'powered_by'      => 'Drevet av <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Om denne siden',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
