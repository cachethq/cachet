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
        'select_all'   => 'Select All',
        'deselect_all' => 'Deselect All',
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Ingen hendelser rapportert',
        'past'         => 'Tidligere hendelser',
        'stickied'     => 'Festede hendelser',
        'scheduled'    => 'Maintenance',
        'scheduled_at' => ', planlagt :timestamp',
        'posted'       => 'Posted :timestamp by :username',
        'posted_at'    => 'Posted at :timestamp',
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
        'good'  => '[0,1]System operational|[2,*]All systems are operational',
        'bad'   => '[0,1]The system is experiencing issues|[2,*]Some systems are experiencing issues',
        'major' => '[0,1]The system is experiencing major issues|[2,*]Some systems are experiencing major issues',
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
        'subscribe'           => 'Subscribe to status changes and incident updates',
        'unsubscribe'         => 'Unsubscribe',
        'button'              => 'Abonner',
        'manage_subscription' => 'Manage subscription',
        'manage'              => [
            'notifications'       => 'Notifications',
            'notifications_for'   => 'Manage notifications for',
            'no_subscriptions'    => 'Du abonnerer for øyeblikket på alle oppdateringer.',
            'update_subscription' => 'Update Subscription',
            'my_subscriptions'    => 'Du abonnerer for øyeblikket på følgende oppdateringer.',
            'manage_at_link'      => 'Manage your subscriptions at :link',
        ],
        'email' => [
            'manage_subscription' => 'We\'ve sent you an email, please click the link to manage your subscription',
            'subscribe'           => 'Abonner på e-postoppdateringer.',
            'subscribed'          => 'Du abonnerer nå på e-postvarslinger, sjekk din e-post for å bekrefte abonneringen.',
            'updated-subscribe'   => 'You\'ve succesfully updated your subscriptions.',
            'verified'            => 'Ditt epost abonnement er bekreftet!',
            'manage'              => 'Administrer ditt abonnement',
            'unsubscribe'         => 'Meld av e-postvarsling.',
            'unsubscribed'        => 'Ditt e-postabonnement har blitt kansellert.',
            'failure'             => 'Noe gikk galt med abonneringen.',
            'already-subscribed'  => 'Kan ikke abonnere: email fordi de allerede er abonnenter.',
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

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => 'Details and updates about the :name incident that occurred on :date',
            'schedule'  => 'Details about the scheduled maintenance period :name starting :startDate',
            'subscribe' => 'Subscribe to :app in order to receive updates of incidents and scheduled maintenance periods',
            'overview'  => 'Hold deg oppdatert med de nyeste service-oppdateringene fra :app.',
        ],
    ],

    // Other
    'home'            => 'Home',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Tider vises i :timezone.',
    'about_this_site' => 'Om denne siden',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
