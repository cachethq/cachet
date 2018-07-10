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
            0 => 'Ukjent',
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
        'none'         => 'Ingen hendelser rapportert',
        'past'         => 'Tidligere hendelser',
        'stickied'     => 'Festede hendelser',
        'scheduled'    => 'Planlagt vedlikehold',
        'scheduled_at' => ', planlagt :timestamp',
        'posted'       => 'Postet :timestamp',
        'posted_at'    => 'Postet den :timestamp',
        'status'       => [
            1 => 'Undersøkes',
            2 => 'Identifisert',
            3 => 'Observerer',
            4 => 'Løst',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Kommende',
            1 => 'Pågår',
            2 => 'Fullført',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1]Systemet er operativt|[2,*]Alle systemer er operative',
        'bad'   => '[0,1]Systemet har problemer|[2,*]Noen systemer har problemer',
        'major' => '[0,1]Det er et større brudd i systemet|[2,*]Noen systemer har større brudd',
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
        'subscribe'           => 'Abonner for å få oppdateringene',
        'unsubscribe'         => 'Avslutt abonnement',
        'button'              => 'Abonner',
        'manage_subscription' => 'Administrer abonnement',
        'manage'              => [
            'no_subscriptions' => 'Du abonnerer for øyeblikket på alle oppdateringer.',
            'my_subscriptions' => 'Du abonnerer for øyeblikket på følgende oppdateringer.',
            'manage_at_link'   => 'Administrer ditt abonnement på :link',
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

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => 'Detaljer og oppdateringer om :name hendelse som skjedde den :date',
            'schedule'  => 'Detaljer om det planlagte vedlikeholdet :name som starter :startDate',
            'subscribe' => 'Abonner på :app for å motta oppdateringer om hendelser og planlagt vedlikehold',
            'overview'  => 'Hold deg oppdatert med de nyeste service-oppdateringene fra :app.',
        ],
    ],

    // Other
    'home'            => 'Forside',
    'powered_by'      => 'Drevet av <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Tider vises i :timezone.',
    'about_this_site' => 'Om denne siden',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
