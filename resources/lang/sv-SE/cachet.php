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
        'last_updated' => 'Senast uppdaterad :timestamp',
        'status'       => [
            0 => 'Unknown',
            1 => 'Fungerar',
            2 => 'Prestandaproblem',
            3 => 'Mindre avbrott',
            4 => 'Större avbrott',
        ],
        'group' => [
            'other' => 'Andra komponenter',
        ],
        'select_all'   => 'Select All',
        'deselect_all' => 'Deselect All',
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Inga händelser har rapporterats',
        'past'         => 'Tidigare händelser',
        'stickied'     => 'Stickied Incidents',
        'scheduled'    => 'Planerat underhåll',
        'scheduled_at' => ', schemalagda: tidsstämpel',
        'posted'       => 'Posted :timestamp by :username',
        'posted_at'    => 'Posted at :timestamp',
        'status'       => [
            1 => 'Undersöker',
            2 => 'Identifierat',
            3 => 'Bevakar',
            4 => 'Löst',
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
        'regenerate' => 'Generera om API-nyckel',
        'revoke'     => 'Återkalla API-nyckel',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Senaste timmen',
            'hourly'    => 'Senaste 12 timmarna',
            'weekly'    => 'Vecka',
            'monthly'   => 'Månad',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'           => 'Subscribe to status changes and incident updates',
        'unsubscribe'         => 'Unsubscribe',
        'button'              => 'Prenumerera',
        'manage_subscription' => 'Manage subscription',
        'manage'              => [
            'notifications'       => 'Notifieringar',
            'notifications_for'   => 'Manage notifications for',
            'no_subscriptions'    => 'Du prenumererar på alla uppdateringar.',
            'update_subscription' => 'Update Subscription',
            'my_subscriptions'    => 'Du prenumererar på följande uppdateringar.',
            'manage_at_link'      => 'Manage your subscriptions at :link',
        ],
        'email' => [
            'manage_subscription' => 'We\'ve sent you an email, please click the link to manage your subscription',
            'subscribe'           => 'Prenumerera på epost-uppdateringar.',
            'subscribed'          => 'Du har börjat prenumerera på e-postmeddelanden, vänligen kontrollera din e-post för att bekräfta din prenumeration.',
            'updated-subscribe'   => 'You\'ve succesfully updated your subscriptions.',
            'verified'            => 'Din epost-prenumeration har bekräftats. Tack!',
            'manage'              => 'Hantera din prenumeration',
            'unsubscribe'         => 'Avbeställ epost-uppdateringar.',
            'unsubscribed'        => 'Din epost-prenumeration har avbrutits.',
            'failure'             => 'Något blev fel med prenumerationen.',
            'already-subscribed'  => 'Kan inte skapa en prenumeration för :email eftersom den redan prenumererar.',
        ],
    ],

    'signup' => [
        'title'    => 'Registrera dig',
        'username' => 'Användarnamn',
        'email'    => 'E-post',
        'password' => 'Lösenord',
        'success'  => 'Ditt konto har skapats.',
        'failure'  => 'Något gick fel med registreringen.',
    ],

    'system' => [
        'update' => 'Det finns en nyare version av Cachet tillgänglig. Du kan lära dig hur du uppdaterar <a href="https://docs.cachethq.io/docs/updating-cachet">här</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Stäng',
        'subscribe' => [
            'title'  => 'Prenumerera på komponentuppdateringar',
            'body'   => 'Fyll i din epostadress för att prenumerera på uppdateringar för den här kompontenten. Om du redan prenumererar, får du redan epost om den här komponenten.',
            'button' => 'Prenumerera',
        ],
    ],

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => 'Details and updates about the :name incident that occurred on :date',
            'schedule'  => 'Details about the scheduled maintenance period :name starting :startDate',
            'subscribe' => 'Subscribe to :app in order to receive updates of incidents and scheduled maintenance periods',
            'overview'  => 'Håll dig uppdaterad med de senaste uppdateringarna från :app.',
        ],
    ],

    // Other
    'home'            => 'Hem',
    'powered_by'      => 'Drivs av <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Times are shown in :timezone.',
    'about_this_site' => 'Om sidan',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Statusflöde',

];
