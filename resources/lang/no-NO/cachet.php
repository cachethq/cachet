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
            0 => 'Unknown',
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
        'none'         => 'Ingen hendelser å rapportere',
        'past'         => 'Tidligere hendelser',
        'stickied'     => 'Stickied hendelser',
        'scheduled'    => 'Planlagt vedlikehold',
        'scheduled_at' => ', planlagt :timestamp',
        'posted'       => 'Skrevet :timestamp',
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
            0 => 'Upcoming',
            1 => 'In Progress',
            2 => 'Complete',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Systemet er operativt| [2, Inf] Alle systemer er operative',
        'bad'   => '[0,1] Systemet har problemer| [2, Inf] Noen systemer har problemer',
        'major' => '[0,1] Det er et større brudd i systemet| [2, Inf] Noen systemer har større brudd',
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
        'subscribe'   => 'Abonner for å få de siste oppdateringene',
        'unsubscribe' => 'Unsubscribe at :link',
        'button'      => 'Abonner',
        'manage'      => [
            'no_subscriptions' => 'Du abonnerer for øyeblikket på alle oppdateringer.',
            'my_subscriptions' => 'Du abonnerer for øyeblikket på følgende oppdateringer.',
        ],
        'email' => [
            'subscribe'          => 'Abonner for å motta varslinger på e-post.',
            'subscribed'         => 'Du har abbonerer nå på epostvarslinger, sjekk din e-post for å bekrefte abboneringen.',
            'verified'           => 'Ditt epost abonnement er bekreftet!',
            'manage'             => 'Administrer ditt abonnement',
            'unsubscribe'        => 'Meld av epostvarsling.',
            'unsubscribed'       => 'Din epostvarsling har blitt kansellert.',
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
            'body'   => 'Skriv inn epostadressen din for å abonnere på varslinger for denne komponenten. Hvis du allerede er abonnent vil alt fortsette som før.',
            'button' => 'Abonner',
        ],
    ],

    // Other
    'home'            => 'Forsiden',
    'description'     => 'Hold deg oppdatert med de nyeste service-oppdateringene fra :app.',
    'powered_by'      => 'Drevet av <a href="https://cachethq.io" class="links"> Cachet</a>.',
    'timezone'        => 'Tider vises i :timezone.',
    'about_this_site' => 'Om denne siden',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];