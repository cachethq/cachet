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
            0 => 'Unknown',
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
        'none'         => 'No s\'han registrat incidents',
        'past'         => 'Incidents anteriors',
        'stickied'     => 'Stickied Incidents',
        'scheduled'    => 'Interrupció programada',
        'scheduled_at' => ', programat',
        'posted'       => 'Posted :timestamp',
        'status'       => [
            1 => 'Investigant',
            2 => 'Identificat',
            3 => 'En observació',
            4 => 'Resolt',
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
        'subscribe'   => 'Subscriviu-vos per rebre les darreres actualitzacions',
        'unsubscribe' => 'Unsubscribe at :link',
        'button'      => 'Subscriviu-vos',
        'manage'      => [
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
        ],
    ],

    'signup' => [
        'title'    => 'Crea un compte',
        'username' => 'Nom de l\'usuari',
        'email'    => 'Correu electrònic',
        'password' => 'Contrasenya',
        'success'  => 'El vostre compte s\'ha creat.',
        'failure'  => 'Something went wrong with the signup.',
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
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => 'Funciona amb <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Times are shown in :timezone.',
    'about_this_site' => 'Sobre aquest lloc',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Estat',

];