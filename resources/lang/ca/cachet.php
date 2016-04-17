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
        'previous_week' => 'Setmana anterior',
        'next_week'     => 'Propera setmana',
        'scheduled'     => 'Interrupció programada',
        'scheduled_at'  => ', programat',
        'status'        => [
            0 => 'Programat', // TODO: Hopefully remove this.
            1 => 'Investigant',
            2 => 'Identificat',
            3 => 'En observació',
            4 => 'Resolt',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Sistema en funcionament | [2, Inf] Tots els sistemes estan en funcionament',
        'bad'   => '[0,1] Actualment el sistema està experimentant problemes| [2, Inf] Alguns sistemes estan experimentant problemes',
        'major' => '[0,1] El servei està experimentant una interrupció major| [2, Inf] Alguns sistemes estan experimentant una interrupció major',
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
        'subscribe' => 'Subscriviu-vos per rebre les darreres actualitzacions',
        'button'    => 'Subscriviu-vos',
        'manage'    => [
            'no_subscriptions' => 'Actualment estau subscrits a totes les actualitzacions.',
            'my_subscriptions' => 'Actualment estau subscrits a les següents actualitzacions.',
        ],
        'email' => [
            'subscribe'          => 'Subscriviu-vos a les actualitzacions del correu electrònic.',
            'subscribed'         => 'Heu estat subscrits a les actualitzacions del correu electrònic. Per favor, consultau el vostre correu electrònic per confirmar la subscripció.',
            'verified'           => 'La vostra subscripció al correu electrònic ha estat confirmada. Gràcies!',
            'manage'             => 'Gestionau la vostra subscripció.',
            'unsubscribe'        => 'Des-subscriviu-vos.',
            'unsubscribed'       => 'La vostra subscripció del correu electrònic ha estat cancel·lada.',
            'failure'            => 'Alguna cosa ha anat malament en el procés de subscripció.',
            'already-subscribed' => 'No pot subscriure\'s :email perquè ja està subscrit.',
            'verify'             => [
                'text'           => "Per favor, confirmau la vostra subscripció de correu electrònic a les actualitzacions d'estat de :app_name.\n:link\nMoltes gràcies, :app_name",
                'html-preheader' => 'Per favor, confirmau la vostra subscripció de correu electrònic a les actualitzacions d\'estat de :app_name.',
                'html'           => '<p>Per favor, confirmau la vostra subscripció de correu electrònic a les actualitzacions d\'estat de :app_name.</p><p><a href=":link">:link</a></p><p>Moltes gràcies, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Nou manteniment programat a :app_name.\n Moltes gràcies, :app_name",
                'html-preheader' => 'Nou manteniment programat a :app_name.',
                'html'           => '<p>Nou manteniment programat a :app_name.</p>',
            ],
            'incident' => [
                'text'           => "S'ha registrat un nou incident a :app_name.\nMoltes gràcies, :app_name",
                'html-preheader' => 'S\'ha registrat un nou incident a :app_name.',
                'html'           => '<p>S\'ha registrat un nou incident a :app_name.</p><p>\nMoltes gràcies, :app_name</p>',
            ],
            'component' => [
                'subject'        => 'Actualització de l\'estat del component',
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
        'username' => 'Nom de l\'usuari',
        'email'    => 'Correu electrònic',
        'password' => 'Contrasenya',
        'success'  => 'Your account has been created.',
        'failure'  => 'Something went wrong with the signup.',
    ],

    'system' => [
        'update' => 'There is a newer version of Cachet available. You can learn how to update <a href="https://docs.cachethq.io/docs/updating-cachet">here</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Tanca',
        'subscribe' => [
            'title'  => 'Subscribe to component updates',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => 'Subscriviu-vos',
        ],
    ],

    // Other
    'home'            => 'Inici',
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => 'Pàgina d\'estats :app en base a <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Sobre aquest lloc',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Estat',

];
