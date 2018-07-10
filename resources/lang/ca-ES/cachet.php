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
        'last_updated' => 'Darrera actualització :timestamp',
        'status'       => [
            1 => 'Operatiu',
            2 => 'Problemes de rendiment',
            3 => 'Interrupció parcial',
            4 => 'Interrupció major',
        ],
        'group' => [
            'other' => 'Altres components',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'No s\'han registrat incidents',
        'past'          => 'Incidents anteriors',
        'previous_week' => 'Previous Week',
        'next_week'     => 'Next Week',
        'scheduled'     => 'Interrupció programada',
        'scheduled_at'  => ', programat',
        'status'        => [
            0 => 'Scheduled', // TODO: Hopefully remove this.
            1 => 'Investigant',
            2 => 'Identificat',
            3 => 'En observació',
            4 => 'Resolt',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Sistema en funcionament | [2, Inf] Tots els sistemes estan en funcionament',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'Regenerau la clau de l\'API',
        'revoke'     => 'Revocau la clau de l\'API',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Darrera hora',
            'hourly'    => 'Darreres 12 hores',
            'weekly'    => 'Setmana',
            'monthly'   => 'Mes',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates',
        'button'    => 'Subscriviu-vos',
        'manage'    => [
            'no_subscriptions' => 'Actualment estau subscrits a totes les actualitzacions.',
            'my_subscriptions' => 'Actualment estau subscrits a les següents actualitzacions.',
        ],
        'email' => [
            'subscribe'          => 'Subscriviu-vos a les actualitzacions del correu electrònic.',
            'subscribed'         => 'Heu estat subscrits a les actualitzacions del correu electrònic. Per favor, consultau el vostre correu electrònic per confirmar la subscripció.',
            'verified'           => 'La vostra subscripció al correu electrònic ha estat confirmada. Gràcies!',
            'manage'             => 'Gestionar la teva subscripció',
            'unsubscribe'        => 'Des-subscriviu-vos.',
            'unsubscribed'       => 'La vostra subscripció del correu electrònic ha estat cancel·lada.',
            'failure'            => 'Alguna cosa ha anat malament en el procés de subscripció.',
            'already-subscribed' => 'No pot subscriure\'s :email perquè ja està subscrit.',
            'verify'             => [
                'text'   => "Si us plau, confirma la teva subscripció d'email d'actualitzacions d'estat de :app_name.\n:link",
                'html'   => '<p>Si us plau, confirma la teva subscripció d\'email per rebre actualitzacions d\'estat de :app_name.</p>',
                'button' => 'Confirmar Subscripció',
            ],
            'maintenance' => [
                'subject' => '[Manteniment Programat] :name',
            ],
            'incident' => [
                'subject' => '[Nou Incident] :status: :name',
            ],
            'component' => [
                'subject'       => 'Actualització de l\'estat del component',
                'text'          => 'El component :component_name ha tingut un canvi d\'estat. El component està ara a :component_human_status.\nGràcies, :app_name',
                'html'          => '<p>El component :component_name ha tingut un canvi d\'estat. El component està ara a :component_human_status.</p><p>Gràcies, :app_name</p>',
                'tooltip-title' => 'Subscriure\'s a notificacions per a :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "T'han convidat a la pàgina d'estat de l'equip :app_name. Per inscriure't segueix el següent enllaç:\n:link\nGràcies, :app_name.",
                'html' => '<p>T\'han convidat a la pàgina d\'estat de l\'equip :app_name. Per inscriure\'t segueix el següent enllaç:</p> <p><a href=":link">:link</a></p><p>Gràcies, :app_name.</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Crea un compte',
        'username' => 'Nom de l\'usuari',
        'email'    => 'Correu electrònic',
        'password' => 'Contrasenya',
        'success'  => 'El vostre compte s\'ha creat.',
        'failure'  => 'Alguna cosa ha anat malament amb el registre.',
    ],

    'system' => [
        'update' => 'Hi ha una nova versió de Cachet disponible. Pots llegir la documentació sobre com actualitzar <a href="https://docs.cachethq.io/docs/updating-cachet">aquí</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Tanca',
        'subscribe' => [
            'title'  => 'Subscriure\'s als canvis dels components',
            'body'   => 'Escrigui el seu correu electrònic per subscriure\'s a les actualitzacions dels components. Si vostè ja està registrat, ja rebrà missatges de correu per aquest component.',
            'button' => 'Subscriviu-vos',
        ],
    ],

    // Other
    'home'            => 'Inici',
    'description'     => 'Estigues informat de les últimes actualitzacions del servei de :app.',
    'powered_by'      => 'Funciona amb <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Sobre aquest lloc',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Estat',

];
