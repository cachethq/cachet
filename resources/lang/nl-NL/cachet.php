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
            0 => 'Onbekend',
            1 => 'Operationeel',
            2 => 'Prestatieproblemen',
            3 => 'Gedeeltelijke Storing',
            4 => 'Grote Storing',
        ],
        'group' => [
            'other' => 'Andere componenten',
        ],
        'select_all'   => 'Alles selecteren',
        'deselect_all' => 'Alles deselecteren',
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Geen incidenten gemeld',
        'past'         => 'Oude incidenten',
        'stickied'     => 'Vastgezette incidenten',
        'scheduled'    => 'Gepland onderhoud',
        'scheduled_at' => ', gepland :timestamp',
        'posted'       => 'Geplaatst op :timestamp',
        'posted_at'    => 'Geplaatst op :timestamp',
        'status'       => [
            1 => 'In onderzoek',
            2 => 'Geïdentificeerd',
            3 => 'Aan het opvolgen',
            4 => 'Opgelost',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Aankomend',
            1 => 'In Behandeling',
            2 => 'Voltooid',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1]Systeem operationeel|[2,*]Alle systemen zijn operationeel',
        'bad'   => '[0,1] Het systeem ondervindt momenteel problemen |[2,Inf] Sommige systemen ondervinden momenteel problemen',
        'major' => '[0,1] Het systeem ondervindt momenteel een grote storing|[2,Inf] Sommige systemen ondervinden momenteel een grote storing',
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
        'subscribe'           => 'Abonneer je op statuswijzigingen en incident updates',
        'unsubscribe'         => 'Abonnement opzeggen',
        'button'              => 'Abonneren',
        'manage_subscription' => 'Abonnement beheren',
        'manage'              => [
            'notifications'       => 'Notificaties',
            'notifications_for'   => 'Beheer meldingen voor',
            'no_subscriptions'    => 'Je bent momenteel geabonneerd op alle updates.',
            'update_subscription' => 'Abonnement bijwerken',
            'my_subscriptions'    => 'Je bent momenteel geabonneerd op de volgende updates.',
            'manage_at_link'      => 'Beheer uw abonnementen op: link',
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

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => 'Informatie en updates over het :name incident van :date',
            'schedule'  => 'Informatie over het :name onderhoud gepland op :startDate',
            'subscribe' => 'Abonneer je op :app om updates te ontvangen van incidenten en geplande onderhoudsperioden',
            'overview'  => 'Blijf op de hoogte van de laatste service updates over :app.',
        ],
    ],

    // Other
    'home'            => 'Home',
    'powered_by'      => 'Mogelijk gemaakt door <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Tijden worden getoond in :timezone.',
    'about_this_site' => 'Over deze website',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
