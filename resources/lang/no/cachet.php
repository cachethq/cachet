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
        'none'          => 'Ingen hendelser å rapportere',
        'past'          => 'Tidligere hendelser',
        'previous_week' => 'Forrige uke',
        'next_week'     => 'Neste uke',
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
        'subscribe' => 'Abonner for å få de siste oppdateringene',
        'button'    => 'Abonner',
        'manage'    => [
            'no_subscriptions' => 'Du abonnerer for øyeblikket på alle oppdateringer.',
            'my_subscriptions' => 'Du abonnerer for øyeblikket på følgende oppdateringer.',
        ],
        'email' => [
            'subscribe'          => 'Abonner for å motta varslinger på e-post.',
            'subscribed'         => 'Du har abbonerer nå på epostvarslinger, sjekk din e-post for å bekrefte abboneringen.',
            'verified'           => 'Ditt epost abonnement er bekreftet!',
            'manage'             => 'Administrer ditt abonnement.',
            'unsubscribe'        => 'Meld av epostvarsling.',
            'unsubscribed'       => 'Din epostvarsling har blitt kansellert.',
            'failure'            => 'Noe gikk galt med abonneringen.',
            'already-subscribed' => 'Kan ikke abonnere: email fordi de allerede er abonnenter.',
            'verify'             => [
                'text'           => "Vennligst bekreft abboneringen på epostvarsling til :app_name.\n:link\nTakk, :app_name",
                'html-preheader' => 'Vennligst bekreft abonnering på epostvarsling til :app_name.',
                'html'           => '<p>Vennligst bekreft abonneringen på epostvarsling til :app_name.</p><p><a href=":link">:link</a></p><p>Takk, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Nytt vedlikehold er planlagt for :app_name.\nTakk, :app_name",
                'html-preheader' => 'Nytt vedlikehold er planlagt for: app_name.',
                'html'           => '<p>Nytt vedlikehold er planlagt for: app_name</p>',
            ],
            'incident' => [
                'text'           => "En ny hendelse har blitt rapportert for :app_name.\nTakk, :app_name",
                'html-preheader' => 'En nye hendelse har blitt rapportert for: app_name.',
                'html'           => '<p>En ny hendelse har blitt rapportert for :app_name.</p><p>Takk, :app_name</p>',
            ],
            'component' => [
                'subject'        => 'Status-oppdatering for komponent',
                'text'           => 'Komponenten :component_name har fått oppdatert status. Komponenten er nå på: component_human_status.\nTakk,: app_name',
                'html-preheader' => 'Komponent-oppdatering fra :app_name',
                'html'           => '<p>Komponenten :component_name har fått oppdatert status. Komponenten er nå på: component_human_status.</p><p>Takk,: app_name</p>',
                'tooltip-title'  => 'Abonner på varsler for :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text'           => "You have been invited to the team :app_name status page, to sign up follow the next link.\n:link\nThank you, :app_name",
                'html-preheader' => 'You have been invited to the team :app_name.',
                'html'           => '<p>You have been invited to the team :app_name status page, to sign up follow the next link.</p><p><a href=":link">:link</a></p><p>Thank you, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Sign Up',
        'username' => 'Username',
        'email'    => 'Epost',
        'password' => 'Passord',
        'success'  => 'Your account has been created.',
        'failure'  => 'Something went wrong with the signup.',
    ],

    'system' => [
        'update' => 'There is a newer version of Cachet available. You can learn how to update <a href="https://docs.cachethq.io/docs/updating-cachet">here</a>!',
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
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Om denne siden',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
