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
        'last_updated' => 'Laatst bijgewerkt :timestamp',
        'status'       => [
            1 => 'Operationeel',
            2 => 'Prestatieproblemen',
            3 => 'Gedeeltelijke Storing',
            4 => 'Grote Storing',
        ],
        'group' => [
            'other' => 'Andere componenten',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Geen incidenten gemeld',
        'past'          => 'Oude incidenten',
        'previous_week' => 'Previous Week',
        'next_week'     => 'Next Week',
        'scheduled'     => 'Gepland onderhoud',
        'scheduled_at'  => ', gepland :timestamp',
        'status'        => [
            0 => 'Scheduled', // TODO: Hopefully remove this.
            1 => 'In onderzoek',
            2 => 'Geïdentificeerd',
            3 => 'Aan het opvolgen',
            4 => 'Opgelost',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Systeem operationeel|[2,Inf] Alle systemen zijn operationeel',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'Hergenereer API-sleutel',
        'revoke'     => 'API-sleutel Intrekken',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Laatste uur',
            'hourly'    => 'Laatste 12 uur',
            'weekly'    => 'Wekelijks',
            'monthly'   => 'Maandelijks',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates',
        'button'    => 'Abonneren',
        'manage'    => [
            'no_subscriptions' => 'Je bent momenteel geabonneerd op alle updates.',
            'my_subscriptions' => 'Je bent momenteel geabonneerd op de volgende updates.',
        ],
        'email' => [
            'subscribe'          => 'Abonneren op e-mail updates.',
            'subscribed'         => 'U bent geabonneerd op e-mail notificaties, controleer uw e-mail om uw abonnement te bevestigen.',
            'verified'           => 'Uw e-mail abonnement is bevestigd. Bedankt!',
            'manage'             => 'Beheer je abonnement',
            'unsubscribe'        => 'Afmelden voor e-mail updates.',
            'unsubscribed'       => 'Uw e-mail abonnement is opgezegd.',
            'failure'            => 'Er ging iets fout tijdens het aanmelden.',
            'already-subscribed' => 'Kan niet aanmelden voor :email omdat deze momenteel al is aangemeld.',
            'verify'             => [
                'text'   => "Bevestig je e-mail abonnement op status updates van :app_name.\n:link",
                'html'   => '<p>Bevestig je e-mail abonnement op status updates van :app_name.</p>',
                'button' => 'Bevestig je abonnement',
            ],
            'maintenance' => [
                'subject' => '[Onderhoud gepland] :name',
            ],
            'incident' => [
                'subject' => '[Nieuw Incident] :status: :name',
            ],
            'component' => [
                'subject'       => 'Component status update',
                'text'          => 'Component :component_name heeft een gewijzigde status. De component status is nu :component_human_status.\nBedankt, :app_name',
                'html'          => '<p>Component :component_name heeft een gewijzigde status. De component status is nu :component_human_status.</p><p>Bedankt, :app_name</p>',
                'tooltip-title' => 'Abonneren voor notificaties van :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "U bent uitgenodigd voor team :app_name status pagina, om u in te schrijven klik op de volgende link.\n:link\nBedankt, :app_name",
                'html' => '<p>U bent uitgenodigd voor team :app_name status pagina, om u in te schrijven klik op de volgende link.</p><p><a href=":link">:link</a></p><p>Bedankt, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Registreer',
        'username' => 'Gebruikersnaam',
        'email'    => 'E-mail',
        'password' => 'Wachtwoord',
        'success'  => 'Uw account is aangemaakt.',
        'failure'  => 'Er is iets misgegaan met het inschrijven.',
    ],

    'system' => [
        'update' => 'Er is een nieuwere versie van Cachet beschikbaar. Kijk hoe je moet updaten <a href="https://docs.cachethq.io/docs/updating-cachet">hier</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Sluiten',
        'subscribe' => [
            'title'  => 'Abonneren voor component updates',
            'body'   => 'Vul uw e-mailadres in om updates te krijgen voor dit component. Als u al ingeschreven bent, krijgt u al emails voor dit component.',
            'button' => 'Abonneren',
        ],
    ],

    // Other
    'home'            => 'Home',
    'description'     => 'Blijf op de hoogte van de laatste service updates over :app.',
    'powered_by'      => 'Mogelijk gemaakt door <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Over deze website',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
