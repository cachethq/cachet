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
            1 => 'Operativo',
            2 => 'Problemi sulle prestazioni',
            3 => 'Disservizio parziale',
            4 => 'Interruzione del servizio',
        ],
        'group' => [
            'other' => 'Altri Componenti',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Nessun incidente segnalato',
        'past'          => 'Past Incidents',
        'previous_week' => 'Settimana Precedente',
        'next_week'     => 'Prossima Settimana',
        'scheduled'     => 'Manutenzione programmata',
        'scheduled_at'  => ', programmata il :timestamp',
        'status'        => [
            0 => 'Programmata', // TODO: Hopefully remove this.
            1 => 'Analisi',
            2 => 'Identificato',
            3 => 'Osservazione',
            4 => 'Risolto',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] System operational|[2,Inf] All systems are operational',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'Rigenera API Key',
        'revoke'     => 'Revoca API Key',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Ultima Ora',
            'hourly'    => 'Ultime 12 Ore',
            'weekly'    => 'Settimana',
            'monthly'   => 'Mese',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates',
        'button'    => 'Iscriviti',
        'manage'    => [
            'no_subscriptions' => 'You\'re currently subscribed to all updates.',
            'my_subscriptions' => 'You\'re currently subscribed to the following updates.',
        ],
        'email' => [
            'subscribe'          => 'Iscriviti agli aggiornamenti via email.',
            'subscribed'         => 'Ti sei appena iscritto agli aggiornamenti email, controlla la tua casella per confermare la sottoscrizione',
            'verified'           => 'La tua iscrizione &egrave; stata confermata. Grazie!',
            'manage'             => 'Manage your subscription.',
            'unsubscribe'        => 'Unsubscribe from email updates.',
            'unsubscribed'       => 'La tua iscrizione &egrave; stata rimossa.',
            'failure'            => 'Qualcosa è andato storto con l\'iscrizione.',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
            'verify'             => [
                'text'           => "Conferma la sottoscrizione email per gli aggiornamento di stato su :app_name \n:link\nGrazie, :app_name",
                'html-preheader' => 'Conferma la sottoscrizione email per gli aggiornamento di stato su :app_name',
                'html'           => '<p>Please confirm your email subscription to :app_name status updates.</p><p><a href=":link">:link</a></p><p>Thank you, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Una nuova manutenzione programmata &egrave; stata inserita su :app_name.\nGrazie, :app_name",
                'html-preheader' => 'Una nuova manutenzione programmata &egrave; stata inserita su :app_name.',
                'html'           => '<p>New maintenance has been scheduled on :app_name.</p>',
            ],
            'incident' => [
                'text'           => "Un nuovo incidente &egrave; stato segnalato su :app_name.\nGrazie, :app_name",
                'html-preheader' => 'Un nuovo incidente &egrave; stato segnalato su :app_name.',
                'html'           => '<p>Un nuovo incidente &egrave; stato segnalato su :app_name.</p><p>Grazie, :app_name</p>',
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
        'title'    => 'Registrati',
        'username' => 'Nome Utente',
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
        'close'     => 'Chiudi',
        'subscribe' => [
            'title'  => 'Subscribe to component updates',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => 'Iscriviti',
        ],
    ],

    // Other
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => ':app Status Page is powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'About This Site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
