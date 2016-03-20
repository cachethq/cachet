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
            1 => 'Funktionsfähig',
            2 => 'Leistungsprobleme',
            3 => 'Teilweiser Ausfall',
            4 => 'Schwerer Ausfall',
        ],
        'group' => [
            'other' => 'Other Components',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Ningún incidente reportado',
        'past'          => 'Vergangene Vorfälle',
        'previous_week' => 'Vorherige Woche',
        'next_week'     => 'Nächste Woche',
        'scheduled'     => 'Geplante Wartungen',
        'scheduled_at'  => ', geplant :timestamp',
        'status'        => [
            0 => 'Geplant', // TODO: Hopefully remove this.
            1 => 'Untersuchungen laufen',
            2 => 'Identifiziert',
            3 => 'Unter Beobachtung',
            4 => 'Behoben',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Sistema operativo | [2,Inf] Todos los sistemas están operativos',
        'bad'   => '[0,1] El sistema está actualmente experimentando problemas | [2,Inf] Algunos sistemas están experimentando problemas',
        'major' => '[0,1] El servicio está experimentando una interrupción mayor | [2, Inf] Algunos sistemas están experimentando una interrupción mayor',
    ],

    'api' => [
        'regenerate' => 'API-Schlüssel neu generieren',
        'revoke'     => 'API-Schlüssel widerrufen',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Última hora',
            'hourly'    => 'Letzte 12 Stunden',
            'weekly'    => 'Wöchentlich',
            'monthly'   => 'Monatlich',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Abonnieren Sie um die neuesten Updates zu erhalten.',
        'button'    => 'Abonnieren',
        'manage'    => [
            'no_subscriptions' => 'You\'re currently subscribed to all updates.',
            'my_subscriptions' => 'You\'re currently subscribed to the following updates.',
        ],
        'email' => [
            'subscribe'          => 'Aktualisierungen per E-Mail abonnieren.',
            'subscribed'         => 'Sie haben E-Mail-Benachrichtigungen abonniert, überprüfen Sie bitte Ihre E-Mail, um Ihr Abonnement zu bestätigen.',
            'verified'           => 'Ihre E-Mail-Abonnement ist bestätigt worden. Danke!',
            'manage'             => 'Manage your subscription.',
            'unsubscribe'        => 'Von E-Mail-Updates deabonnieren.',
            'unsubscribed'       => 'Ihre E-Mail-Abonnement wurde gekündigt.',
            'failure'            => 'Etwas ist mit dem Abonnement schief gelaufen.',
            'already-subscribed' => 'No se puede suscribir :email porque ya esta suscripto.',
            'verify'             => [
                'text'           => "Bitte bestätigen Sie Ihre E-Mail-Abonnement zu :app_name Status-Aktualisierungen.\n:link\nDanke, :app_name",
                'html-preheader' => 'Bitte bestätigen Sie Ihre E-Mail-Abonnement zu :app_name Status-Aktualisierungen.',
                'html'           => '<p>Bestätigen Sie bitte Ihr E-Mail-Abonnement für :app_name Statusaktualisierungen.</p><p><a href=":link">:link</a></p><p>Danke, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Neue Wartung wurde für :app_name geplant.\nDanke, :app_name",
                'html-preheader' => 'Neue Wartung wurde für :app_name geplant.',
                'html'           => '<p>Neue Wartung wurde für :app_name geplant.</p>',
            ],
            'incident' => [
                'text'           => "Ein neuer Vorfall wurde auf :app_name berichtet.\nDanke, :app_name",
                'html-preheader' => 'Ein neuer Vorfall wurde über :app_name berichtet.',
                'html'           => '<p>Ein neuer Vorfall wurde über :app_name berichtet.</p> <p>Danke, :app_name</p>',
            ],
            'component' => [
                'subject'        => 'Actualización de estado del componente',
                'text'           => 'El componente :component_name ha cambiado de estado. El componente está ahora :component_human_status.\nGracias, :app_name',
                'html-preheader' => 'Actualización del componente de :app_name',
                'html'           => '<p>El componente :component_name ha cambiado de estado. El componente ahora está :component_human_status.</p><p>Gracias, :app_name</p>',
                'tooltip-title'  => 'Subscribirse a las notificaciones de :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text'           => "Te han invitado a la página de estado del equipo de :app_name, para registrarte sigue este enlace.\n:link\nGracias, :app_name",
                'html-preheader' => 'Te han invitado al equipo de :app_name.',
                'html'           => '<p>Has sido invitado a la página de estado del equipo :app_name, para inscribirte sigue el siguiente enlace.</p><p><a href=":link">:link</a></p><p>Gracias, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Registrarse',
        'username' => 'Benutzername',
        'email'    => 'E-Mail',
        'password' => 'Passwort',
        'success'  => 'Tu cuenta ha sido creada.',
        'failure'  => 'Hubo algún error al registrarse.',
    ],

    'system' => [
        'update' => 'Hay disponible una versión de Cachet más nueva. Puedes aprender sobre cómo actualizarla <a href="https://docs.cachethq.io/docs/updating-cachet">aquí</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Cerrar',
        'subscribe' => [
            'title'  => 'Subscribirse a actualizaciones de componentes',
            'body'   => 'Introduce tu dirección de correo electrónico para subscribirte a las actualizaciones de este componente. Si ya estás subscrito, ya recibirás los correos electrónicos para este componente.',
            'button' => 'Abonnieren',
        ],
    ],

    // Other
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => ':app Status-Seite betrieben mit <a href="https://cachethq.io">Cachet</a>.',
    'about_this_site' => 'Über diese Seite',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status-Feed',

];
