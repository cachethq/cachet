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
            1 => 'Operationeel',
            2 => 'Prestatieproblemen',
            3 => 'Gedeeltelijke Storing',
            4 => 'Grote Storing',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Nothing to report',
        'past'          => 'Past Incidents',
        'previous_week' => 'Vorige week',
        'next_week'     => 'Next Week',
        'none'          => 'Nothing to report',
        'scheduled'     => 'Gepland onderhoud',
        'scheduled_at'  => ', gepland :timestamp',
        'status'        => [
            0 => 'Gepland', // TODO: Hopefully remove this.
            1 => 'In onderzoek',
            2 => 'Geïdentificeerd',
            3 => 'Aan het opvolgen',
            4 => 'Opgelost',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] System operational|[2,Inf] All systems are operational',
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
            'last_hour' => 'Last Hour',
            'hourly'    => 'Laatste 12 uur',
            'weekly'    => 'Wekelijks',
            'monthly'   => 'Maandelijks',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates',
        'button'    => 'Abonneer',
        'email'     => [
            'subscribe'          => 'Abonneren op e-mail updates.',
            'subscribed'         => 'U bent geabonneerd op e-mailmeldingen, controleer uw e-mail om uw abonnement te bevestigen.',
            'verified'           => 'Uw e-mail abonnement is bevestigd. Bedankt!',
            'unsubscribe'        => 'Unsubscribe from email updates.',
            'unsubscribed'       => 'Uw e-mail abonnement is opgezegd.',
            'failure'            => 'Er ging ging iets fout tijdens het aanmelden.',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
            'verify'             => [
                'text'           => "Bevestig uw e-mail abonnement op :app_name status updates.\n:link\nBedankt, :app_name",
                'html-preheader' => 'Bevestig uw e-mail abonnement op :app_name status updates.',
                'html'           => '<p>Please confirm your email subscription to :app_name status updates.</p><p><a href=":link">:link</a></p><p>Thank you, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Nieuwe onderhoud is gepland voor :app_name.\nBedankt, :app_name",
                'html-preheader' => 'Nieuw onderhoud is gepland voor :app_name.',
                'html'           => '<p>New maintenance has been scheduled on :app_name.</p>',
            ],
            'incident' => [
                'text'           => "Nieuw incident is aangemeld op :app_name.\nBedankt, :app_name",
                'html-preheader' => 'Nieuw incident aangemeld op :app_name.',
                'html'           => '<p>Nieuw incident aangemeld op :app_name.</p><p>Bedankt, :app_name</p>',
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
                'text'           => "You have been invited to the team :app_name status page, to sign up follow the next link.\n:link\nThank you, :app_name",
                'html-preheader' => 'You have been invited to the team :app_name.',
                'html'           => '<p>You have been invited to the team :app_name status page, to sign up follow the next link.</p><p><a href=":link">:link</a></p><p>Thank you, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Sign Up',
        'username' => 'Gebruikersnaam',
        'email'    => 'E-mail',
        'password' => 'Wachtwoord',
        'success'  => 'Your account has been created.',
        'failure'  => 'Something went wrong with the signup.',
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
            'button' => 'Abonneer',
        ],
    ],

    // Other
    'powered_by'      => ':app Status Page is powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'About This Site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
