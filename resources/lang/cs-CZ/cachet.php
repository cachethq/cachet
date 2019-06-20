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
        'last_updated' => 'Poslední aktualizace :timestamp',
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
        'none'          => 'Nejsou nahlášeny žádné incidenty',
        'past'          => 'Minulé incidenty',
        'previous_week' => 'Předchozí týden',
        'next_week'     => 'Následující týden',
        'scheduled'     => 'Plánovaná odstávka',
        'scheduled_at'  => ', plánované na :timestamp',
        'status'        => [
            0 => 'Naplánováno', // TODO: Hopefully remove this.
            1 => 'Zkoumání příčiny',
            2 => 'Problém identifikován',
            3 => 'Watching',
            4 => 'Fixed',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Služba je v provozu|[2,Inf] Všechny služby fungují bez problémů',
        'bad'   => '[0,1] Služba má problémy|[2,Inf] Některá ze služeb má problémy',
        'major' => '[0,1] Služba má celkový výpadek|[2,Inf] Některé služby mají celkový výpadek',
    ],

    'api' => [
        'regenerate' => 'Obnovit API klíč',
        'revoke'     => 'Zrušit API klíč',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Během poslední hodiny',
            'hourly'    => 'Posledních 12 hodin',
            'weekly'    => 'Týden',
            'monthly'   => 'Měsíc',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Přihlásit se k odběru upozornění',
        'button'    => 'Přihlásit',
        'manage'    => [
            'no_subscriptions' => 'Aktuálně jsi přihlášen(a) ke všem upozorněním.',
            'my_subscriptions' => 'Aktuálně jsi přihlášen(a) k následujícím upozorněním.',
        ],
        'email' => [
            'subscribe'          => 'Přihlásit se k zasílání upozornění e-mailem.',
            'subscribed'         => 'Proběhlo přihlášení k e-mailovým upozorněním, potvrďte ho prosím na vašem e-mailu.',
            'verified'           => 'E-mail pro zasílání upozornění byl ověřen. Děkujeme!',
            'manage'             => 'Manage your subscription',
            'unsubscribe'        => 'Odhlásit z odběru e-mailových upozornění.',
            'unsubscribed'       => 'Odběr e-mailových upozornění byl zrušen.',
            'failure'            => 'Došlo k chybě při nastavení odběru e-mailů.',
            'already-subscribed' => 'Nelze přihlásit k odběru :email, protože je již přihlášen.',
            'verify'             => [
                'text'   => "Please confirm your email subscription to :app_name status updates.\n:link",
                'html'   => '<p>Please confirm your email subscription to :app_name status updates.</p>',
                'button' => 'Confirm Subscription',
            ],
            'maintenance' => [
                'subject' => '[Maintenance Scheduled] :name',
            ],
            'incident' => [
                'subject' => '[New Incident] :status: :name',
            ],
            'component' => [
                'subject'       => 'Component Status Update',
                'text'          => 'The component :component_name has seen a status change. The component is now at :component_human_status.\nThank you, :app_name',
                'html'          => '<p>The component :component_name has seen a status change. The component is now at :component_human_status.</p><p>Thank you, :app_name</p>',
                'tooltip-title' => 'Subscribe to notifications for :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "Byl(a) jsi pozván(a) do teamu :app_name, k registraci klikni na následující odkaz.\n:link\nDěkujeme, :app_name",
                'html' => '<p>Byl(a) jsi pozván(a) do teamu :app_name, k registraci klikni na následující odkaz.</p><p><a href=":link">:link</a></p><p>Děkujeme, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Sign Up',
        'username' => 'Username',
        'email'    => 'Email',
        'password' => 'Password',
        'success'  => 'Your account has been created.',
        'failure'  => 'Something went wrong with the signup.',
    ],

    'system' => [
        'update' => 'There is a newer version of Cachet available. You can learn how to update <a href="https://docs.cachethq.io/docs/updating-cachet">here</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Zavřít',
        'subscribe' => [
            'title'  => 'Subscribe to component updates',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => 'Přihlásit',
        ],
    ],

    // Other
    'home'            => 'Home',
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'About This Site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
