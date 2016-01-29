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
        'status' => [
            1 => 'Fungerar',
            2 => 'Prestandaproblem',
            3 => 'Mindre avbrott',
            4 => 'Större avbrott',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Inga händelser har rapporterats.',
        'past'          => 'Tidigare händelser',
        'previous_week' => 'Förra veckan',
        'next_week'     => 'Nästa vecka',
        'none'          => 'Inga händelser har rapporterats.',
        'scheduled'     => 'Planerat underhåll',
        'scheduled_at'  => ', schemalagda: tidsstämpel',
        'status'        => [
            0 => 'Schemalagd', // TODO: Hopefully remove this.
            1 => 'Undersöker',
            2 => 'Identifierat',
            3 => 'Bevakar',
            4 => 'Löst',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] System operational|[2,Inf] All systems are operational',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'Generera om API-nyckel',
        'revoke'     => 'Återkalla API-nyckel',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Last Hour',
            'hourly'    => 'Senaste 12 timmarna',
            'weekly'    => 'Vecka',
            'monthly'   => 'Månad',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Prenumerera för att få de senaste uppdateringarna',
        'button'    => 'Prenumerera',
        'email'     => [
            'subscribe'          => 'Prenumerera på epost-uppdateringar.',
            'subscribed'         => 'Du har börjat prenumerera på e-postmeddelanden, vänligen kontrollera din e-post för att bekräfta din prenumeration.',
            'verified'           => 'Din epost-prenumeration har bekräftats. Tack!',
            'unsubscribe'        => 'Avbeställ epost-uppdateringar.',
            'unsubscribed'       => 'Din epost-prenumeration har avbrutits.',
            'failure'            => 'Något blev fel med prenumerationen.',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
            'verify'             => [
                'text'           => "Vänligen bekräfta din epost-prenumeration för: :app_name-statusuppdateringar.\n:link\nTack, :app_name",
                'html-preheader' => 'Vänligen bekräfta din epost-prenumeration på statusuppdateringar för :app_name.',
                'html'           => '<p>Vänligen bekräfta din epost-prenumeration på :app_names statusuppdateringar.</p> <p><a href=":link">: länk</a></p> <p>Tack, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Nytt underhåll har schemalagts för :app_name.\nTack du, :app_name",
                'html-preheader' => 'Nytt underhåll har schemalagts för :app_name.',
                'html'           => '<p>Nytt underhåll har schemalagts för :app_name.</p>',
            ],
            'incident' => [
                'text'           => "Nya händelser har rapporterats hos :app_name.\nTack, :app_name",
                'html-preheader' => 'Nya händelser har rapporterats hos :app_name.',
                'html'           => '<p>Nya händelser har rapporterats hos :app_name.</p> <p>Tack, :app_name</p>',
            ],
            'component' => [
                'subject'        => 'Component Status Update',
                'text'           => 'The component :component_name has seen a status change. The component is now at :component_human_status.\nThank you, :app_name',
                'html-preheader' => 'Component Update from :app_name',
                'html'           => '<p>The component :component_name has seen a status change. The component is now at :component_human_status.</p><p>Thank you, :app_name</p>',
                'tooltip-title'  => 'Subscribe to notifications for :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text'           => "Du har blivit inbjuden till teamet för :app_names statussida, registrera dig genom att trycka på länken.\n:link\nTack, :app_name",
                'html-preheader' => 'Du har blivit inbjuden till teamet för :app_name.',
                'html'           => '<p>Du har blivit inbjuden till teamet :app_names statussida. Registrera dig genom att trycka på <a href=":link"> den här länken</a></p> <p>Tack, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Registrera dig',
        'username' => 'Username',
        'email'    => 'Email',
        'password' => 'Password',
        'success'  => 'Ditt konto har skapats.',
        'failure'  => 'Något gick fel med registreringen.',
    ],

    'system' => [
        'update' => 'There is a newer version of Cachet available. You can learn how to update <a href="https://docs.cachethq.io/docs/updating-cachet">here</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Close',
        'subscribe' => [
            'title'  => 'Subscribe to component updates?',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll receive emails for this component too.',
            'button' => 'Prenumerera',
        ],
    ],

    // Other
    'powered_by'      => ': app statussida drivs av <a href="https://cachethq.io" class="links"> Cachet</a>.',
    'about_this_site' => 'Om sidan',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Statusflöde',

];
