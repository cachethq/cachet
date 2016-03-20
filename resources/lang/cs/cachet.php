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
        'last_updated' => 'Last updated :timestamp',
        'status'       => [
            1 => 'V provozu',
            2 => 'Problémy s výkonem',
            3 => 'Částečný výpadek',
            4 => 'Závažný výpadek',
        ],
        'group' => [
            'other' => 'Other Components',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'No incidents reported',
        'past'          => 'Past Incidents',
        'previous_week' => 'Previous Week',
        'next_week'     => 'Next Week',
        'scheduled'     => 'Plánovaná odstávka',
        'scheduled_at'  => ', plánované na :timestamp',
        'status'        => [
            0 => 'Naplánováno', // TODO: Hopefully remove this.
            1 => 'Zkoumání příčiny',
            2 => 'Problém identifikován',
            3 => 'Sledování',
            4 => 'Opraveno',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] System operational|[2,Inf] All systems are operational',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'Obnovit API klíč',
        'revoke'     => 'Zrušit API klíč',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Last Hour',
            'hourly'    => 'Last 12 Hours',
            'weekly'    => 'Week',
            'monthly'   => 'Month',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates',
        'button'    => 'Přihlásit',
        'manage'    => [
            'no_subscriptions' => 'You\'re currently subscribed to all updates.',
            'my_subscriptions' => 'You\'re currently subscribed to the following updates.',
        ],
        'email' => [
            'subscribe'          => 'Přihlásit se k zasílání upozornění e-mailem.',
            'subscribed'         => 'Proběhlo přihlášení k e-mailovým upozorněním, potvrďte ho prosím na vašem e-mailu.',
            'verified'           => 'E-mail pro zasílání upozornění byl ověřen. Děkujeme!',
            'manage'             => 'Manage your subscription.',
            'unsubscribe'        => 'Unsubscribe from email updates.',
            'unsubscribed'       => 'Odběr e-mailových upozornění byl zrušen.',
            'failure'            => 'Došlo k chybě při nastavení odběru e-mailů.',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
            'verify'             => [
                'text'           => "Potvrďte, prosím, svůj e-mail pro upozornění od :app_name Status.\n:link\nDěkujeme, :app_name",
                'html-preheader' => 'Potvrďte, prosím, svůj e-mail pro upozornění od :app_name Status.',
                'html'           => '<p>Potvrďte, prosím, svůj e-mail pro upozornění od :app_name Status</p><p><a href=":link">:link</a></p> <p>Děkujeme, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Nová odstávka v :app_name byla naplánována.\nDěkujeme.",
                'html-preheader' => 'Byla naplánována nová odstávka v :app_name.',
                'html'           => '<p>Byla naplánována nová odstávka v :app_name.</p>',
            ],
            'incident' => [
                'text'           => "Byl nahlášen nový incident v :app_name.\nDěkujeme.",
                'html-preheader' => 'Byl nahlášen nový incident v :app_name.',
                'html'           => '<p>Byl nahlášen nový incident v :app_name.</p><p>Děkujeme.</p>',
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
        'username' => 'Uživatelské jméno',
        'email'    => 'E-mail',
        'password' => 'Heslo',
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
            'title'  => 'Subscribe to component updates',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => 'Přihlásit',
        ],
    ],

    // Other
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => ':app Status Page is powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'About This Site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Kanál stavů',

];
