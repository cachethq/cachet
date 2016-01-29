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
            1 => 'Normal',
            2 => 'Hastighedsproblemer',
            3 => 'Nogen udfald',
            4 => 'Store problemer',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Intet at rapportere',
        'past'          => 'Tidligere hændelser',
        'previous_week' => 'Sidste uge',
        'next_week'     => 'Næste uge',
        'none'          => 'Intet at rapportere',
        'scheduled'     => 'Planlagte hændelser',
        'scheduled_at'  => ', planlagt til :timestamp',
        'status'        => [
            0 => 'Scheduled', // TODO: Hopefully remove this.
            1 => 'Investigating',
            2 => 'Identified',
            3 => 'Watching',
            4 => 'Rettet',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] System operational|[2,Inf] All systems are operational',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'Dan ny API nøgle',
        'revoke'     => 'Fjern API nøgle',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Last Hour',
            'hourly'    => 'Sidste 12 timer',
            'weekly'    => 'Uge',
            'monthly'   => 'Måned',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Abonner på seneste hændelser.',
        'button'    => 'Abonner',
        'email'     => [
            'subscribe'          => 'Få opdateringer pr. email.',
            'subscribed'         => 'Du er blevet tilmeldt emailnotifikationer. Vi har sendt dig en bekræftelse på den indtastede email-adresse.',
            'verified'           => 'Din tilmelding er nu blevet bekræftet, tak.',
            'unsubscribe'        => 'Afmeld emailnotifikationer.',
            'unsubscribed'       => 'Du er nu blevet frameldt vores emailnotifikationer.',
            'failure'            => 'Noget gik galt med bekræftelsen.',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
            'verify'             => [
                'text'           => "Bekræft din tilmelding til vores emailnotifikationer for :app_name statusopdateringer.\n:link\nTak, :app_name",
                'html-preheader' => 'Bekræft venligst din tilmelding til :app_name statusopdateringer via email.',
                'html'           => '<p>Bekræft venligst din tilmelding til :app_name statuspdateringer via email.</p><p><a href=":link">:link</a></p><p>Tak, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Vi har planlagt ny vedligeholdelses vindue på :app_name.\nMvh, :app_name",
                'html-preheader' => 'Vi har planlagt ny vedligeholdelses vindue på :app_name.',
                'html'           => '<p>Vi har planlagt ny vedligeholdelses vindue på :app_name.</p>',
            ],
            'incident' => [
                'text'           => "Ny fejl raporteret på :app_name.\nMvh, :app_name",
                'html-preheader' => 'Ny fejl raporteret på :app_name.',
                'html'           => '<p>Ny fejl raporteret på :app_name.</p><p>Mvh, :app_name</p>',
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
        'username' => 'Username',
        'email'    => 'Email',
        'password' => 'Kodeord',
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
            'button' => 'Abonner',
        ],
    ],

    // Other
    'powered_by'      => ':app statusside er bygget på <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Om siden',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
