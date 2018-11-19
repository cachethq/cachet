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
            0 => 'Unknown',
            1 => 'Normal',
            2 => 'Hastighedsproblemer',
            3 => 'Nogen udfald',
            4 => 'Store problemer',
        ],
        'group' => [
            'other' => 'Andre komponenter',
        ],
        'select_all'   => 'Select All',
        'deselect_all' => 'Deselect All',
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Ingen hændelser er rapporteret',
        'past'         => 'Tidligere hændelser',
        'stickied'     => 'Stickied Incidents',
        'scheduled'    => 'Maintenance',
        'scheduled_at' => ', planlagt til :timestamp',
        'posted'       => 'Posted :timestamp',
        'posted_at'    => 'Posted at :timestamp',
        'status'       => [
            1 => 'Undersøger',
            2 => 'Identificeret',
            3 => 'Overvåger',
            4 => 'Rettet',
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
        'good'  => '[0,1]System operational|[2,*]All systems are operational',
        'bad'   => '[0,1]The system is experiencing issues|[2,*]Some systems are experiencing issues',
        'major' => '[0,1]The system is experiencing major issues|[2,*]Some systems are experiencing major issues',
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
        'subscribe'           => 'Subscribe to status changes and incident updates',
        'unsubscribe'         => 'Unsubscribe',
        'button'              => 'Abonner',
        'manage_subscription' => 'Manage subscription',
        'manage'              => [
            'notifications'       => 'Notifikationer',
            'notifications_for'   => 'Manage notifications for',
            'no_subscriptions'    => 'Du abonner i øjeblikket på alle opdateringer.',
            'update_subscription' => 'Update Subscription',
            'my_subscriptions'    => 'Du abonnere i øjeblikket på følgende opdateringer.',
            'manage_at_link'      => 'Manage your subscriptions at :link',
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

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => 'Details and updates about the :name incident that occurred on :date',
            'schedule'  => 'Details about the scheduled maintenance period :name starting :startDate',
            'subscribe' => 'Subscribe to :app in order to receive updates of incidents and scheduled maintenance periods',
            'overview'  => 'Hold dig opdateret med de seneste opdateringer fra :app.',
        ],
    ],

    // Other
    'home'            => 'Hjem',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Times are shown in :timezone.',
    'about_this_site' => 'Om denne side',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
