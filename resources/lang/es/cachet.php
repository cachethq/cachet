<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    // Components
    'components' => [
        'status' => [
            1 => 'Operacional',
            2 => 'Problemas de rendimiento',
            3 => 'Interrupción parcial',
            4 => 'Interrupción mayor',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'No hay ninguna incidencia reportada.',
        'past'          => 'Incidentes anteriores',
        'previous_week' => 'Semana anterior',
        'next_week'     => 'Siguiente semana',
        'none'          => 'No hay ninguna incidencia reportada.',
        'status'        => [
            0 => '',
            1 => 'Investigando',
            2 => 'Identificado',
            3 => 'Observando',
            4 => 'Corregido',
        ],
    ],

    // Service Status
    'service' => [
        'good' => 'Todos los sistemas funcionando.',
        'bad'  => 'Algunos sistemas están experimentando problemas.',
    ],

    'api' => [
        'regenerate' => 'Regenerar API Key',
        'revoke'     => 'Revocar API Key',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'hourly'  => 'Hourly',
            'daily'   => 'Daily',
            'monthly' => 'Monthly',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates.',
        'button'    => 'Subscribe',
        'email'     => [
            'subscribe'    => 'Subscribe to email updates.',
            'subscribed'   => 'You\'ve been subscribed to email notifications, please check your email to confirm your subscription.',
            'verified'     => 'Your email subscription has been confirmed. Thank you!',
            'unsubscribe'  => 'Unsuscribe from email updates.',
            'unsubscribed' => 'Your email subscription has been cancelled.',
            'failure'      => 'Something went wrong with the subscription.',
            'verify'       => [
                'text'           => "Please confirm your email subscription to :app_name status updates.\n:link\nThank you, :app_name",
                'html-preheader' => 'Please confirm your email subscription to :app_name status updates.',
                'html'           => '<p>Please confirm your email subscription to :app_name status updates.</p><p>:link</p><p>Thank you, :app_name</p>',
            ],
            'maintenance'  => [
                'text'           => "New maintenance has been scheduled on :app_name.\nThank you, :app_name",
                'html-preheader' => 'New maintenance has been scheduled on :app_name.',
                'html'           => '<p>New maintenance has been scheduled on :app_name.</p><p>Thank you, :app_name</p>',
            ],
            'incident'     => [
                'text'           => "New incident has been reported on :app_name.\nThank you, :app_name",
                'html-preheader' => 'New incident has been reported on :app_name.',
                'html'           => '<p>New incident has been reported on :app_name.</p><p>Thank you, :app_name</p>',
            ],
        ],
    ],

    // Other
    'powered_by'      => ':app La página de estado es alimentada por <a href="https://cachethq.github.io">Cachet</a>.',
    'about_this_site' => 'Acerca de este sitio',
    'rss-feed'        => 'Feed RSS',
    'atom-feed'       => 'Atom Feed',
    'feed'            => 'Estado del Feed',

];
